<?php

namespace App\Http\Controllers;
use App\Package;
use App\Service;
use App\Category;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home($value=''){
    	$packages = Package::take(8)->get();
    	$services = Service::take(4)->get();
    	return view('frontend.home',compact('packages','services'));
    }


    // Package detail
   public function detail($id)
   {
     $package=Package::find($id);
     return view('frontend.detail',compact('package'));
   }

   //  all packages 
   public function package()
   {
      $packages=Package::all();
     return view('frontend.package',compact('packages'));
   }


    public function profile()
   {
    
     return view('frontend.profile');
   }

    public function filtercategory($value=''){
    	$categories = Category::all();
    	return view('frontend.filterpackage',compact('categories'));
    }
}
