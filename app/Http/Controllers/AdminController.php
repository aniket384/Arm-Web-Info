<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Auth;
use Session;
class AdminController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email'=>$data['username'],'password'=>$data['password']])){
                return redirect('4rmw3b/dashboard');
            }else{
                return redirect('/4rmw3b')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('admin.admin_login');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function logout()
    {
        Session::flush();
        return redirect('/4rmw3b')->with('flash_message_success','Loged out successfully');
    }
    public function profile()
    {
    	return view('admin.profile');
    }
}
