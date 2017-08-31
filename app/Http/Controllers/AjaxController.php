<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subcategory;

class AjaxController extends Controller
{ 

   public function ajaxsubcat()
    {

    	 $id = $_GET['cat
    	 _id'];

         $msg = Subcategory::where('category_id','=',$id)->get();
    
     
      return response()->json($msg);
	}
}