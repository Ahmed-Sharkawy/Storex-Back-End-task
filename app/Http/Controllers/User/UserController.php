<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;

class UserController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new User;
    }

    public function index()
    {
        $users = $this->model->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreRequest $request)
    {
        $this->model->create(['password' => Hash::make($request->password)] + $request->validated());

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $password = $request->password ? Hash::make($request->password) : $user->password;
        $user->update(['password' => $password] + $request->validated());

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        dd($user);
        $user->delete();
        return redirect()->route('users.index');
    }
}
