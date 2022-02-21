<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\UserModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home(){
      return view('home.index');
  }

  public function login(){
      return view('home.login');
  }

  public function register(){
      return view('home.register');
  }
  public function registerSubmit(Request $req){
    $this->validate($req,
    [
        'name'=>'required',
        'email'=>'required',
        'id'=>'required',
        'password'=>'required',
        'conf_password'=>'required|same:password',
    ]
    );
    $usr=new UserModel();
    $usr->name=$req->name;
    $usr->email=$req->email;
    $usr->u_id=$req->id;
    $usr->password=md5($req->password);
    $usr->save();

    return redirect()->view('home.login');

  }

  public function loginSubmit(Request $req){
    $this->validate($req,
            [
                
                'id'=>'required',
                'password'=>'required',
                'conf_password'=>'required|same:password',
                
            ],
            [
                'uname.required'=>'Please provide your username',
                'password'=>'Password Required'
            ]
    
        );

        $s_user=UserModel::where ('u_id',$req->id)
        ->where ('password',md5($req->password))
        ->first();
        $msg="";
        if($s_user){
            $req->session()->flash('msg','User exists');
            $req->session()->put('user',$s_user->u_id);
        }
        else{
            $req->session()->flash('msg','User does not exists');
        }
        return redirect()->route('home');

        
    }

    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }
  
}
