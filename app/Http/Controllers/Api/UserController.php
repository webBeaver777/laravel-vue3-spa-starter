<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Inertia\ResponseFactory;

class UserController extends Controller
{
    public function index(Request $request): Response|ResponseFactory
    {
        $filters = $request->only(['search']);

        $users = User::query()
            ->when($filters['search'] ?? null, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('users/Index', [
            'users' => $users,
            'filters' => $filters,
        ]);
    }
}
