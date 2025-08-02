<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\users\StoreUserRequest;
use App\Http\Requests\users\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;
use Inertia\ResponseFactory;

class UserController extends Controller
{
    public function index(): Response|ResponseFactory
    {
        $users = User::query()
            ->when(request('search'), fn($q, $s) => $q->where('name', 'like', "%$s%")->orWhere('email', 'like', "%$s%")
            )
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('users/Index', [
            'users' => $users,
            'filters' => request()->only('search'),
        ]);
    }

    public function create(): Response|ResponseFactory
    {
        return Inertia::render('users/Create');
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        User::create([
            'name' => $request->validated('name'),
            'email' => $request->validated('email'),
            'password' => bcrypt($request->validated('password')),
        ]);

        return redirect()->route('users.index')->with('success', 'Пользователь создан.');
    }

    public function edit(User $user): Response|ResponseFactory
    {
        return Inertia::render('users/Edit', [
            'user' => $user,
        ]);
    }

    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());

        return redirect()->route('users.index')->with('success', 'Пользователь обновлён.');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Пользователь удалён.');
    }
}
