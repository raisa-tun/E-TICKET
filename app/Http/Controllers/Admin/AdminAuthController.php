<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AdminAuthController extends Controller
{
    //
    public function auth(Request $request){
       // dd('hi');
        if($request->isMethod('post')){
            $this->validate($request,[
                'email' => 'required|email',
                'password' => 'required',
            ]);
           
    
    
            if(auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
                {
                   

                    //dd("logged in");
                        return redirect('/admindashboard')->with('success','You are logged in successfully!');
                }
                    else{
                      //  dd('error');
                        return back()->with('error','Whoops! invalid email and password.');
                    }
                }
    }

    public function index(){
        return view('admin.layouts.admin_dashboard');
    }

    public function adminLogout(Request $request){

        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('Success', 'You are logout successfully');
        return redirect('/');
    }
    
    public function store(Request $request){

        User::create($request,[
     
            'user_name'=> $request->user_name,
            'email' => $request->email,
            'password'=> $request->password,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address
        ])->save();

        return redirect('/')->with('success',"You're successfully created an account");
    }
}
