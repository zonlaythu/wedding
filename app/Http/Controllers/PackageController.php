<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
// use App\Category;
use App\Service;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $services=Service::take(3)->get();
        // $services= Service::find($id);
        $packages=Package::all();
        
        // dd($packages);
        return view('backend.packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $services=Service::All();   
        $packages=Package::All();
        return view('backend.packages.create',compact('packages','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        
        $request->validate([
            'name'=>'required',
            'photo'=>'required',
            'price'=>'required',

        ]);

        // File Uploaded
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/packageimg/'),$imageName);
        $myfile='backend/packageimg/'.$imageName; 

        // Data insert
        $package=new Package;
        $package->name=$request->name;                

        $package->photo=$myfile; 
        $package->price=$request->price;                   
        $package->save();

        $service=$request->services;
        // dd(count($service));
        for ($i=0; $i <count($service); $i++) { 
            // $pservice=new Service();
           // $service->name=$service[$i];
           // $pservice->save();
           $package->services()->attach($service[$i]);
           
        }
        // $package = Package::find($package_id);
        
            // Redirect
        return redirect()->route('packages.index');  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $package=Package::find($id);
        // return view('backend.packages.index',compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $services=Service::all();
        $package=Package::find($id);


        return view('backend.packages.edit',compact('services','package'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ser=$request->service;

        // File Uploaded
        if($request->hasFile('photo')){
            $imageName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/packageimg/'),$imageName);
            $myfile='backend/packageimg/'.$imageName; 
        //  delete old photo(unlink) 
            $old=$request->oldphoto;
            unlink($old);
        }else{
            $myfile=$request->oldphoto;
        } 
            // Data insert
        $package=Package::find($id);
        $package->name=$request->name;
        $package->photo=$myfile;
        $package->price=$request->price; 

        $service=$request->services;
        
        // dd(count($service));
        if($service){
            // for ($i=0; $i <count($service); $i++) { 
            $package->services()->detach($service);
            $service->delete();
        }else{

        for ($i=0; $i <count($service); $i++) { 
            
           $package->services()->attach($service[$i]);
           
        } }                  

        $package->save();

            // Redirect
        $package->services()->attach($ser);
        return redirect()->route('packages.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $packages=Package::find($id);
        $packages->delete();
        return redirect()->route('packages.index');
    }

}

