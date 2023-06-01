<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SaveUserRequest;

class UserController extends Controller
{
    public function store(SaveUserRequest $request): RedirectResponse
    {
        $data = $request->safe()->only(['first_name', 'last_name', 'birth_date', 'username', 'is_admin', 'password']);
        $user = User::create($data);
        if ($user->exists) {
            session()->flash("success", "User saved");
            return redirect('admin');
        }
        return back()->with('error', 'User not saved');
    }
}
