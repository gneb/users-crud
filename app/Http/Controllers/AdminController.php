<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function show(): View
    {
        $users = User::paginate($perPage = 15, $columns = ['id', 'username', 'is_admin', 'first_name', 'last_name', 'birth_date', 'created_at', 'updated_at']);
        return view('admin.dashboard', ['users' => $users]);
    }
}
