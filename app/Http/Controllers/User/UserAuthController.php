<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserAuthController extends Controller
{
    //
    public function auth(Request $request){
        // dd('hi');
         if($request->isMethod('post')){
             $this->validate($request,[
                 'email' => 'required|email',
                 'password' => 'required',
             ]);
            
     
     
             if(auth()->attempt(['email' => $request->email, 'password' => $request->password]))
                 {
                    
 
                     //dd("logged in");
                         return redirect('/userdashboard')->with('success','You are logged in successfully!');
                 }
                     else{
                       //  dd('error');
                         return back()->with('error','Whoops! invalid email and password.');
                     }
                 }
     }
     public function index(){
        return view('user.layouts.user_dashboard');
    }

    public function register(Request $request){

        
        $user = User::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => $request->password,
            'phone_number' =>$request->phone_number,
            'address' => $request->address
        ]);

        return redirect()->route('/')->with('login_msg', 'Please login to your account.');
        return redirect('/')->with('success', 'You are successfully registered! Now you can Log in to your account.');

    }
    public function userLogout(Request $request){

        auth()->logout();
        Session::flush();
        Session::put('Success', 'You are logout successfully');
        return redirect('/');
    }
}
