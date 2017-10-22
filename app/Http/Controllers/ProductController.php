<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use DB;

use Session;

use App\Category;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product=Product::all();
        return view('Product.index')->withProduct($product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();

        $cats=array();

        foreach($categories as $category){
               $cats[$category->id]=$category->title;
        }
           return view('Product.create')->withCategories($cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

//dd($request);

        $this->validate($request,array(

            'title'=>'required',
            'description'=>'required',
            'category'=>'required',
            'subcategory'=>'required',

            ));

        $product=new Product;

        $product->name=$request->title;
        $product->description=$request->description;
        $product->category_id=$request->category;
        $product->subcategory_id=$request->subcategory;
           
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
        $categories=Category::all();

        $cats=array();

        foreach($categories as $category){
               $cats[$category->id]=$category->title;
        }
        $product=Product::find($id);

        return view('product.edit')->withProduct($product)->withCategories($cats);
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

         //dd($id);
         
         $this->validate($request,array(

            'name'=>'required',
            'description'=>'required|max:255',
            'category_id'=>'required',
            'subcategory_id'=>'required',

            ));

        $product=Product::find($id);

        $product->name=$request->name;
        $product->description=$request->description;
        $product->category_id=$request->category_id;
        $product->subcategory_id=$request->subcategory_id;
        $product->status=$request->status;
          
        $product->save();

        Session::flash('success','The Product is Updated!');

        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);

        $product->delete();

        return redirect()->back()->with('success','You Have Deleted The Product');
    }
}
