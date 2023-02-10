<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    //Register function

    public function create(Request $request) {

        $user = User::create([
            'email' => $request->input('email'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone_number' => $request->input('phone_number'),
            'password' => Hash::make($request->input('password')),
        ]);

        DB::connection()->insert(
            "insert into user_role (user_id, role_id) values (?, ?)",
            [$user->id, 1]
        );

        return redirect()->route("register");

    }

    //Login function

    public function logMe(Request $request) {

        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route("login");
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        if($user) {
            return redirect()->route("home");
        }

    }



    
    //Return view functions

    public function home(Request $request) {
        return view("home");
    }

    public function register() {
        return view("register");
    }

    public function login() {
        return view("login");
    }

}
