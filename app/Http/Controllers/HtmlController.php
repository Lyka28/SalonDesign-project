<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Hash; 
use Session; 


class HtmlController extends Controller
{
    public function login()
    {
        return view('login');
    }


    public function registration()
    {
        return view('registration');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:12'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res){
            return back()->with('success', 'You have successfully registered');
        }else {
            return back()->with('fail','Something went wrong');
        }

    }


    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:5|max:12'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Password not match');   
            }
        }else{
            return back()->with('fail','This email is not registered');
        }
    }



    public function dashboard()
    {
        $data = array();                                                 //47. check if login.then it will get the data from user table.. and passsing the data into the dashboard
        if(Session::has('loginId'))
        {
            $data = User::where('id', '=' , Session::get('loginId'))->first(); 
        }
        return view('dashboard', compact('data'));     
    }



    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }

    public function home()
    {
        return view('home');
    }


    public function bookingHair()
    {
        return view('bookinghair', compact('data'));  
    }



}
