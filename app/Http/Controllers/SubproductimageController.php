<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Product_Image;

use Image;
use Session;
use App\subproduct;
class SubproductimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       
             //   dd($request);


        $images=$request->file('chk');

       foreach($images as $key=>$image){
         $img=Product_Image::find($key);

         if(count($img)==0)
           $img=new Product_Image;


            //dd($image);
            $filename=time().'.'.$image->getClientOriginalExtension();//part of image intervention library
            $location=public_path('/images/'.$filename);
            
            // use $location='images/'.$filename; on a server
            Image::make($image)->resize(750,1000)->save($location);

            $img->name=$filename;

            $img->p_id=$request->subproduct_id;

            $img->save();

        }

        Session::flash('success','The Subproduct is added!');

        return redirect()->route('subproduct.index');
 
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
        
        $imagename=subproduct::find($id)->images()->get();



        return view('Subproduct.uploadimage')->withImagename($imagename);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
