<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;

use App\User;


class DashboardController extends Controller
{
    public function index(){
        return view('auth.login');
    }    

    public function login(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $password = Hash::make($request->password);

        try{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $request->session()->regenerate();
                return redirect()->route('home');
            }else{
                return back()->with('error', 'Incorrect login details');
            }
        }catch(Exception $e){
            return redirect('/')->with('error', $e->getMessage());
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing-page');
    }
}
