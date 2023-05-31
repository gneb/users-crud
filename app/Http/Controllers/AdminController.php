<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show(): View
    {
        return view('admin.dashboard');
    }
}
