<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $role =  DB::table('users')->where('email', $request->email)->first()->role;
        $page = "";
        if($role === "admin"){
            $page = "/admin/dashboard";
        }else if($role === "walikelas"){
            $page = "/walikelas/dashboard";
        }else{
            $page = "/siswa/dashboard";
        }
        $messages = [
            'required' => 'Please enter your :attribute',
        ];

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],$messages);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended($page);
        }

        return back()->withErrors([
            'email' => 'Your email is not valid !',
            'password' => 'Your password is not valid !',

        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
