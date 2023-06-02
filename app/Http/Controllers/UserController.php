<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SaveUserRequest;
use App\Http\Requests\EditUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(SaveUserRequest $request): RedirectResponse
    {
        $data = $request->safe()->all();
        $user = User::create($data);
        if ($user->exists) {
            session()->flash("success", "User saved");
            return redirect('admin');
        }
        return back()->with('error', 'User not saved');
    }

    public function update(EditUserRequest $request, $id = null): RedirectResponse
    {
        $data = $request->safe()->all();
        $data = array_filter($data);
        if(isset($data['password'])){
            $data['password'] = Hash::make($data['password']);
        }

        $update = User::where('id', $id)
                        ->update($data);
        if ($update) {
            session()->flash("success", "User updated");
            return redirect('admin');
        }
        return back()->with('error', 'User not updated');
    }
}
