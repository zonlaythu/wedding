<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Category;
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
        $services=Service::all();
        $categories=Category::all();
        $packages=Package::all();
        return view('backend.packages.index',compact('packages','services','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::All();
        $services=Service::All();
        $packages=Package::All();
        return view('backend.packages.create',compact('categories','services','packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'photo'=>'required',
            'category'=>'required',
            'service'=>'required',

        ]);

        // File Uploaded
        $imageName=time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/packageimg/'),$imageName);
        $myfile='backend/packageimg/'.$imageName; 

            // Data insert
        $package=new Package;

        $package->name=$request->name;                
        $package->photo=$myfile;                    
        $package->category_id=$request->category; 
        $package->service_id=$request->service; 

        $package->save();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $services=Service::all();
        $package=Package::find($id);

        return view('backend.packages.edit',compact('services','categories','package'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name'=>'required',
    //         'photo'=>'required',
    //         'category'=>'required',
    //         'service'=>'required',

    //     ]);

    //     // File Uploaded
    //     $imageName=time().'.'.$request->photo->extension();

    //     $request->photo->move(public_path('backend/packageimg/'),$imageName);
    //     $myfile='backend/packageimg/'.$imageName; 
    //          // delete old photo(unlink) 
    //     $old=$request->oldphoto;
    //     unlink($old);
    // }else{
    //     $myfile=$request->oldphoto;
    // } 
            // Data insert
    // $package=Package::find($id);

    // $package->name=$request->name;                
    // $package->photo=$myfile;                    
    // $package->category_id=$request->category; 
    // $package->service_id=$request->service; 

    // $package->save();

            // Redirect
//     return redirect()->route('packages.index');  
// }

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
