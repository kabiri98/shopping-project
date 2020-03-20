<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Http\Request;

class AdminController extends Controller
{
            public function __construct()
            {
            
                $this->middleware('Role');
            }

    public function index()
    {         return view('Admin.index');
        
    }
    public function indexdashboard1()
    {         return view('Admin.dash1');
        
    }
    public function indexdashboard2()
    {         return view('Admin.dash2');
        
    }
    public function indexdashboard3()
    {         return view('Admin.dash3');
        
    }
    public function indexcontact()
    {         return view('layouts.contactus');
        
    }
}
