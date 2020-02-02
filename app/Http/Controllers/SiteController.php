<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class siteController extends Controller
{
    public function getall(){
        $allusers = Users::all();
        return view('users/all')->with('all', $allusers);
        //var_dump($allusers);
    }

    public function start(request $request){


        $request->validate([
            'fullname' => 'required',
            'username' => 'required|string',
            'password' => 'required|string|min:8',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric',
            'gender' => 'required'
        ]);

        return redirect('valid')->with('success','welcome');

        $form= new Users();
        $form->fullname=$request->post('fullname');
        $form->username=$request->get('username');
        $form->password=$request->get('password');
        $form->email=$request->get('email');
        $form->rdate=time();
        $form->ldate=time();
        $form->mobile=$request->get('mobile');
        $form->gender=$request->get('gender');
       // چه post بزنیم چه get اوکیه و فرقی نمی کنه
       // در کل داره اطلاعات داره پست میشه
       $form->save();
        }
        
   public function updateuser(request $request){

        $request->validate([
            'fullname' => 'required',
            'username' => 'required|string',
            'password' => 'required|string|min:8',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric',
            'gender' => 'required'
        ]);

        $form= new Users();
        $form->fullname=$request->post('fullname');
        $form->username=$request->get('username');
        $form->password=$request->get('password');
        $form->email=$request->get('email');
        $form->ldate=time();
        $form->mobile=$request->get('mobile');
        $form->gender=$request->get('gender');
       // چه post بزنیم چه get اوکیه و فرقی نمی کنه
       // در کل داره اطلاعات داره پست میشه
       $form->save();
    }
}
