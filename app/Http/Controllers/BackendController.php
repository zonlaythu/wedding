<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userdetail;

class BackendController extends Controller
{
    public function dashboard()
    {
    	return view('backend.dashboard');
    }

    

}
