<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Color;

use Session;



class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors=Color::all();
        return view('color.index')->withColors($colors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Color.create');
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

            'name'=>'required',
            'color_code'=>'required',
            ));

        $color=new Color;

        $color->name=$request->name;
        
        $color->color_code=$request->color_code;
          
        $color->save();

        Session::flash('success','The Color is added!');

        return redirect()->route('color.index');

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
         $color=Color::find($id);
        return view('Color.edit')->withColor($color);
   
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

           
            'name'=>'required',
            'color_code'=>'required',


            ));

          $color=Color::find($id);

        $color->name=$request->name;
        
        $color->color_code=$request->color_code;
          
        $color->save();

        Session::flash('success','The Color is Updated!');

        return redirect()->route('color.index');

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
