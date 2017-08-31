<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use Session;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $category=category::all();
        return view('Category.index')->withCategory($category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Category.create');
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

         $this->validate($request,array(

            'title'=>'required',
            'description'=>'required|max:255',

            ));

        $category=new Category;

        $category->title=$request->title;

        $category->description=$request->description;
           
        $category->status=0;
          
        $category->save();

        Session::flash('success','The Category is added!');

        return redirect()->route('category.create');

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
        $category=Category::find($id);
        return view('Category.edit')->withCategory($category);
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

         $this->validate($request,array(

            'title'=>'required',
            'description'=>'required|max:255',
           

            ));

        $category=Category::find($id);

        $category->title=$request->title;
        $category->description=$request->description;
        $category->status=$request->status;
          
        $category->save();

        Session::flash('success','The Category is Updated!');

        return redirect()->route('category.index');

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
