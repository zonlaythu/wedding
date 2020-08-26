<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        return view('backend.services.index',compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $services=Service::all();
        return view('backend.services.create',compact('categories','services'));
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
            'price'=>'required',
            'description'=>'required',
            'category'=>'required',

        ]);

        // File Uploaded
        $imageName=time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/serviceimg/'),$imageName);
            $myfile='backend/serviceimg/'.$imageName;

            // Data insert
            $service=new Service;
           
            $service->name=$request->name; 
            $service->type=$request->type;      
            $service->photo=$myfile;
            $service->price=$request->price;           
            $service->description=$request->description;    
            $service->category_id=$request->category;  
            $service->save();
            // Redirect
            return redirect()->route('services.index');  

           }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $service=Service::find($id);
        return view('backend.services.edit',compact('service','categories'));
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
    //  $request->validate([
    //     'name'=>'required',
    //     'photo'=>'required',
    //     'price'=>'required',
    //     'description'=>'required',
    //     'category'=>'required',

    // ]);

        // File Uploaded
     if($request->hasFile('photo')){
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/serviceimg'),$imageName);
        $myfile='backend/serviceimg/'.$imageName;
            // delete old photo(unlink) 
        $old=$request->oldphoto;
        unlink($old);
    }else{
        $myfile=$request->oldphoto;
    } 


            // Data insert
    $service=Service::find($id);
    // $categories=Category::find($id);
    $service->name=$request->name; 
    $service->type=$request->type;      
    $service->photo=$myfile; 
    $service->price=$request->price;           
    $service->description=$request->description;    
    $service->category_id=$request->category;  
    $service->save();

            // Redirect
    return redirect()->route('services.index');  
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services=Service::find($id);
        $services->delete();
        return redirect()->route('services.index');
    }
}
