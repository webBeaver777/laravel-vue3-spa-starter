<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class UserController extends Controller
{
    public function index(Request $request): Response|ResponseFactory
    {
        $users = User::query()
            ->when($request->input('search'), fn ($q) =>
            $q->where('name', 'like', '%' . $request->input('search') . '%')
            )
            ->select('id', 'name', 'email')
            ->get();

        return inertia('users/Index', [
            'users' => $users,
            'filters' => $request->only('search'),
        ]);
    }
}
