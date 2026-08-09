<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct(
        private readonly UserService $userService
    ) {
        $this->middleware('permission:user.view')
            ->only(['index', 'show']);

        $this->middleware('permission:user.create')
            ->only(['create', 'store']);

        $this->middleware('permission:user.update')
            ->only(['edit', 'update']);

        $this->middleware('permission:user.delete')
            ->only(['destroy']);
    }

    public function index(Request $request): View
    {
        $users = $this->userService->paginate(
            $request->string('search')->toString(),
            $request->string('role')->toString() ?: null
        );

        $roles = Role::query()
            ->orderBy('name')
            ->get();

        return view('admin.users.index', compact(
            'users',
            'roles'
        ));
    }

    public function create(): View
    {
        $roles = Role::query()
            ->orderBy('name')
            ->get();

        return view('admin.users.create', compact('roles'));
    }

    public function store(
        StoreUserRequest $request
    ): RedirectResponse {
        $this->userService->create(
            $request->validated()
        );

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil ditambahkan.');
    }

    public function show(User $user): View
    {
        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user): View
    {
        $roles = Role::query()
            ->orderBy('name')
            ->get();

        $user->load('roles');

        return view('admin.users.edit', compact(
            'user',
            'roles'
        ));
    }

    public function update(
        UpdateUserRequest $request,
        User $user
    ): RedirectResponse {
        $this->userService->update(
            $user,
            $request->validated()
        );

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil diperbarui.');
    }

    public function destroy(User $user): RedirectResponse
    {
        if ($user->id === auth()->id()) {
            return back()->with(
                'error',
                'Anda tidak dapat menghapus akun sendiri.'
            );
        }

        $this->userService->delete($user);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil dihapus.');
    }
}