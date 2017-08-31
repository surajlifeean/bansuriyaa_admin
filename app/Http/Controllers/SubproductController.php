<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subproduct;

use Session;

use App\Category;


use App\Subcategory;


use App\Product;

use App\Size;

use App\Color;

class SubproductController extends Controller
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
        
        
        dd($request);
        $this->validate($request,array(

            'title'=>'required',
            'p_code'=>'required',
            'qty'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'distype'=>'required',
            'qty'=>'required',
            'color'=>'required',
            'size'=>'required',

            ));

        $subproduct=new Subproduct;

        $subproduct->title=$request->title;
        $subproduct->description=$request->description;
        $subproduct->category_id=$request->category;
        $subproduct->subcategory_id=$request->subcategory;
           
        $product->status=0;
          
        $product->save();

        Session::flash('success','The Product is added!');

        return redirect()->route('product.index');
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
        //
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
        //
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
