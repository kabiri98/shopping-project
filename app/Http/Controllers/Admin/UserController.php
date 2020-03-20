<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\Model\Comments;

use App\Roles;
use App\Models\Posts;
use App\Models\Photos;
use App\Models\Videos;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function __construct()
{
    $this->middleware('auth');
   
  $this->middleware('Role');
  
}


    public function index()
    {
        $users=User::all();
        return view('Admin.users.index')->with('users',$users);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
       $edituser=User::find($id);
        return view('edit')->with('user',$edituser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    // public function update(Request $request, User $user,$id)
    // {
    //     $user=User::find($id);
    //     $user->name=$request->post('name');
    //     $user->email=$request->post('email');
    //     $user->save();
    //     return redirect('Admin/users/showuser');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,$id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('Admin/users/showuser');

    }

    //------------------------------for control users-----------------///

    public function showusers() {
        $users=User::all();
       return view('Admin.users.showusers')->with('users',$users);
    }
     
        // ----update-----
        public function updateform(User $user,$id)
        {
            $edituser=User::find($id);
            return view('Admin.users.updateform')->with('user',$edituser);
        }
    
        public function updateuser (Request $request, User $user,$id)
         {
            $user=User::find($id);
            $user->name=$request->post('name');
            $user->email=$request->post('email');
            $user->save();
             $request->session()->flash('success', 'Record successfully updated!');
             return redirect('admin/users/showusers'); 
        }

        //  -------insert------
        public function insertform(){
            return view ('Admin.users.insertform');
        }
         
         public function insertuser (Request $request) {
     
             $user=new User();
             $user->name=$request->post('name');
             $user->email=$request->post('email');
             $user->password=$request->post('password');
             $user->save();
             
             $request->session()->flash('success', 'Record successfully added!');
             return redirect('admin/users/showusers');
         }
        //  -------delete----
         public function deleteform(User $user,$id){
             $deleteuser=User::find($id);
             return view('Admin.users.deleteform')->with('user',$deleteuser);
         }
     
         public function deleteuser (Request $request, User $user,$id) {
     
             $user=User::find($id);
             $user->delete();
             $request->session()->flash('danger', 'User Deleted!');
             return redirect('admin/users/showusers');
         }


    

// =====================function haye datatable===================================================

    public function index1(){

        return view('Admin.users.index1');
    }

    public function alluserdatatabels(){
        $users =User::all();
        return Datatables()->of($users)->make(true);


    }

}
