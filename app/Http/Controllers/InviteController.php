<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class InviteController extends Controller
{
    public function create(): View
    {
        return view('auth.invite');
    }
}
