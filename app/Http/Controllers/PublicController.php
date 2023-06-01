<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;

class PublicController extends Controller
{
    public function show(): View
    {
        return view('public.home', ['usersCount' => User::all()->count()]);
    }
}

