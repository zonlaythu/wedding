<?php

namespace App\Http\Controllers;
use App\Package;
use App\Service;
use App\Category;
use App\Userdetail;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home($value=''){
    	$packages = Package::where('status',2)->take(4)->get();
    	$services = Service::take(4)->get();
      $categories = Category::all();
    	return view('frontend.home',compact('packages','services','categories'));
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
    $services=Service::all();
     $package=Package::find($id);
     return view('frontend.detail',compact('package','services'));
   }

   //  all packages 
   public function package()
   {
      // $i = 0;
      $packages=Package::where('status',2)->get();
     return view('frontend.package',compact('packages'));
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

    public function fcategory(Request $request,$id){
      $categories = Category::all();
      $services = Service::where('category_id',$id)->get();
      return view('frontend.filtercategory',compact('categories','services'));
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

    public function profile()
   {
    
     return view('frontend.profile');
   }

   public function userdetail(Request $request)
    {
      // dd($request);
       $request->validate([
            'photo'=>'required',
            'phone'=>'required',
            'address'=>'required',

        ]);

        // File Uploaded
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/detailimg/'),$imageName);
        $myfile='backend/detailimg/'.$imageName; 

        // Data insert
        $detail=new Userdetail;
        $detail->user_id=Auth::id();
        $detail->phone=$request->phone;                
        $detail->photo=$myfile; 
        $detail->address=$request->address;                   
        $detail->save();
            // Redirect
           return redirect()->route('index');             
      
    }

     public function about()
   {
    
     return view('frontend.about');
   }

   public function checkout(Request $request)
   {
    
     return view('frontend.checkout');
   }

   public function contact()
   {
    
     return view('frontend.contact');
   }

}
