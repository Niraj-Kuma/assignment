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

    public function create()
    {
        return view('users.create');
    }

    public function store( Request $request){
        $data = [
            
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];
        User::insert($data);
        return redirect()->route('user_index');
    }

    public function delete($id){

        if(!$id){
            return redirect()->back();
        }

        $user = User::find($id);
        if($user){
            $user->delete();
            return redirect()->back();
        }
        
        return redirect()->back();

    }
}
