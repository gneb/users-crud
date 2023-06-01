<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function show(): View
    {
        $users = User::paginate($perPage = 15, $columns = ['first_name', 'last_name', 'birth_date']);
        return view('admin.dashboard', ['users' => $users]);
    }
}
