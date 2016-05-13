<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use Validator;

use App\User;

use Illuminate\Support\Facades\Auth;

use Session;

class AdminController extends Controller
{
    public function __construct(){

        $this->middleware('auth',array('except' => array('getLogin','postLogin')));
    }

    public function getIndex(){

    	return redirect('admin/home');

    }

    public function getLogin(){

        return view('admin/welcome');
    }

    public function postLogin(){
        
        $cred = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );

        $role = User::where('email','=',Input::get('email'))->first();

        if (Auth::attempt($cred)){

            if (Auth::check()){
                
                Session::put('adminrole','admin');
                Session::put('username',Auth::user()->name);
                return redirect('admin/home');
            }
            else{
                Session::flush();
                Auth::logout();
                return redirect('admin/login')->with('login_errors',true);
            }
        } else{
                Session::flush();
                Auth::logout();
                return redirect('admin/login')->with('login_errors',true);
            }
    }

    public function getHome(){

    	return view('admin/home');

    }
    public function getUploadartist(){
        
        return view('admin.uploadartist');
    }
	
    public function getAdduser(){

                return View('admin/adduser');
 }

public function postUser(Request $request){

            $rules = array(
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6'
            //'empid'=>'required' /**For future use **/
            );

            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails())
            {

                return redirect('admin/adduser')->withErrors($validator);

            }else {

            $data = Input::get();
            $role='admin';


            User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
            ]);

            // $data=array();
            // Mail::send('emails.verify', $data, function ($message) {

            // $message->from('info@ide-global.com', 'Ide Global');

            // $message->to('harshithak61@gmail.com','dsfsd')->subject('Login Credentials for iclock.in');

            // });


            $request->session()->flash('alert-success', 'User added!');
            return redirect('admin/adduser');
    }

}

}