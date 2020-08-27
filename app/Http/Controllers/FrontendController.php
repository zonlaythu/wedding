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

      public function service()
   {

    $categories=Category::all();
    // $items=Item::all();
     return view('frontend.service',compact('categories'));

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

   //  public function custom(Request $request,$id)
   // {
   //  // dd($id);
   //   $service=Service::find($id);
   //   return view('frontend.custom',compact('service'));
   // }

    public function filtercategory($value=''){
    	$categories = Category::all();
    	return view('frontend.filterpackage',compact('categories'));
    }

     public function getItems(request $request)
   {

    $sid=$request->sid;
    if($sid==0){
    $services=Service::All();
    
  }else{
    $services=Category::find($sid)->services;
  }
     return $services;
   }


   // public function userdetail(Request $request)
   //  {
   //    dd($request);
   //     $request->validate([
   //          'photo'=>'required',
   //          'phone'=>'required',
   //          'address'=>'required',

   //      ]);

   //      // File Uploaded
   //      $imageName=time().'.'.$request->photo->extension();
   //      $request->photo->move(public_path('backend/detailimg/'),$imageName);
   //      $myfile='backend/detailimg/'.$imageName; 

   //      // Data insert
   //      $detail=new Userdetail;
   //      $detail->phone=$request->phone;                
   //      $detail->photo=$myfile; 
   //      $detail->address=$request->address;                   
   //      $detail->save();
   //          // Redirect
   //          return "successfully";  
   //  }

}
