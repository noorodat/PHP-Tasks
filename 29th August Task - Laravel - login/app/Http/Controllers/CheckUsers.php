<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class CheckUsers extends Controller
{
        public function checkUserExistence(Request $request) {
        // Get data from input
        $username = $request->input("username");
        $password = $request->input("password");
        // Get the user
        $user = users::where('username', $username)->first();
        // Check if the user exists in the database
        if ($user) {
            if ($user->password == $password) {
                session(['name' => $user->fullName]);
                return view('/home');
            } else {
                session(['loginError' => 'Invalid password']);
                return view('/login');
            }
        } else {
            session(['loginError' => 'username doesn not exist']);
            return view('/login');
        }
    }
}
