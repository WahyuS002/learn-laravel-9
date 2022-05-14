<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $isVerified = true;
        $isVerifiedEmail = true;
        return view('dashboard', compact('isVerified'));
    }
}
