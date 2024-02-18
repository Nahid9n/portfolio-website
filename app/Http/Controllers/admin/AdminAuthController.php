<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;

class AdminAuthController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $admin = User::where('email',$request->email)->first();

        if (Auth::guard('web')->attempt($credentials)) {
            // Authentication successful
            $user = auth()->user();
            $user->id = $admin->id;
            $user->first_name = $admin->first_name;
            $user->last_name = $admin->last_name;
            $user->email = $admin->email;
            $user->phone = $admin->phone;
            $user->save();
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
    }
    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('admin.login');
    }
}
