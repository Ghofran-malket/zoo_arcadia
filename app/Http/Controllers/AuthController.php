<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthController extends Controller
{
    public  function login() {
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request){
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return to_route('auth.login')->withErrors([
            'email' => 'Email Invalid'
        ])->onlyInput('email');
    }

    public  function register() {
        return view('auth.register');
    }

    public function doRegister(LoginRequest $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'type' => 'required',
            
        ]);
        
        $data['name'] =  $request->name;
        $data['email'] =  $request->email;
        $data['password'] =  Hash::make($request->password);
        // $data['type'] =  $request->type;
        
        // $data['role_id'] = '3';
        $user = User::create($data);
        
        if($user){
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        

        return to_route('auth.register')->withErrors([
            'email' => 'Email Invalid'
        ])->onlyInput('email');
    }

    public function logout(){
        Auth::logout();
        return to_route('auth.login');
    }

}


