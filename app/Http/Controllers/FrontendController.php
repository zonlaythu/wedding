<?php

namespace App\Http\Controllers;
use App\Package;
use App\Service;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home($value=''){
    	$packages = Package::take(8)->get();
    	$services = Service::take(4)->get();
    	return view('frontend.home',compact('packages','services'));
    	// return view('fronted.home');
    }

}
