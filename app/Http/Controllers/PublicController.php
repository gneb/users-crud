<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function show(): View
    {
        return view('public.home');
    }
}

