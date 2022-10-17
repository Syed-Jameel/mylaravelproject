<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return 'Email or Password not matched...';
        } else {
            $req->session()->put('user', $user);
            return redirect('/home');
        }
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
