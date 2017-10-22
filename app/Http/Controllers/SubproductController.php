<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subproduct;

use Session;

use App\Category;


use App\Subcategory;

use Image;

use App\Product;

use App\Size;

use App\Color;

use App\Product_Image;

class SubproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subproduct=subproduct::all();
        return view('Subproduct.index')->withSubproduct($subproduct);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        $products=Product::all();

        $pros=array();

        foreach($products as $product){
            $pros[$product->id]=$product->name;
        }

        
        $sizes=Size::all();

        $siz=array();

        foreach($sizes as $size){
            $siz[$size->id]=$size->name;
        }
    

        $colors=Color::all();

        $col=array();

        foreach($colors as $color){
            $col[$color->id]=$color->name;
        }
    
            
                   //print_r($cats);


        //print_r($scats);
        return view('Subproduct.create')->withProducts($pros)->withSizes($siz)->withColors($col);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $this->validate($request,array(

        
            'product_id'=>'required',
            'p_code'=>'required',
            'qty'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'sale_price'=>'required',
            'color_id'=>'required',
            'size_id'=>'required',

            ));

        $subproduct=new Subproduct;

        $subproduct->product_id=$request->product_id;
        $subproduct->pcode=$request->p_code;
        $subproduct->price=$request->price;
        $subproduct->sale_price=$request->sale_price;
        $subproduct->new_arrival=$request->new_arrival;
        $subproduct->quantity=$request->qty;
        $subproduct->color=$request->color_id;
        $subproduct->size=$request->size_id;
        $subproduct->status=0;

        
        $subproduct->save();

        $images=$request->file('image');

       foreach($images as $image){
         $img=new Product_Image;

        if($request->hasFile('image')){

            //dd($image);
            $filename=time().'.'.$image->getClientOriginalExtension();//part of image intervention library
            $location=public_path('/images/'.$filename);
            
            // use $location='images/'.$filename; on a server
            Image::make($image)->resize(750,1000)->save($location);

            $img->name=$filename;

            $img->p_id=$subproduct->id;

            $img->description="bansuriyaa";            
            $img->save();

        }
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



        $products=Product::all();

        $pros=array();

        foreach($products as $product){
            $pros[$product->id]=$product->name;
        }

        
        $sizes=Size::all();

        $siz=array();

        foreach($sizes as $size){
            $siz[$size->id]=$size->name;
        }
    

        $colors=Color::all();

        $col=array();

        foreach($colors as $color){
            $col[$color->id]=$color->name;
        }
    
            

         $subproduct=subproduct::find($id);

        return view('subproduct.edit')->withSubproduct($subproduct)->withProducts($pros)->withSizes($siz)->withColors($col);
   
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

        //dd($request);
        
        $this->validate($request,array(

        
            'product_id'=>'required',
            'pcode'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'distype'=>'required',
            'color_id'=>'required',
            'size_id'=>'required',

            ));

        $subproduct=subproduct::find($id);

        $subproduct->product_id=$request->product_id;
        $subproduct->pcode=$request->pcode;
        $subproduct->price=$request->price;
        $subproduct->discount=$request->discount;
        $subproduct->discount_type=$request->distype;
        $subproduct->quantity=$request->quantity;
        $subproduct->color=$request->color_id;
        $subproduct->size=$request->size_id;
        $subproduct->status=0;
        
        $subproduct->save();

Session::flash('success','The Subproduct is updated!');

        return redirect()->route('subproduct.index');


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
