<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users
        $users = User::all(['id', 'name', 'email', 'password']);

        // Return the view with users data
        return view('users.index', compact('users'));
    }
}
