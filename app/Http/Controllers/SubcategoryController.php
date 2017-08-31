<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Subcategory;

use Session;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $subcategory=Subcategory::all();
        return view('Subcategory.index')->withSubcategory($subcategory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();

        return view('Subcategory.create')->withCategory($category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

         $this->validate($request,array(

            'title'=>'required',
            'description'=>'required|max:255',
            'category_id'=>'required',

            ));

        $subcategory=new Subcategory;

        $subcategory->name=$request->title;

        $subcategory->description=$request->description;
           
        $subcategory->status=0;
          
        
        $subcategory->category_id=$request->category_id;

        $subcategory->save();

        Session::flash('success','The Subcategory is added!');

        return redirect()->route('subcategory.create');


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
        $subcategory=Subcategory::find($id);

        $categories=Category::all();

        $cats=array();

        foreach($categories as $category){
            $cats[$category->id]=$category->title;
        }
        return view('Subcategory.edit')->withSubcategory($subcategory)->withCategories($cats);
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
