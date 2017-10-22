<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

	public function authenticate(Request $request)
    {
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' =>'admin'])) {
   		  return redirect()->intended('home');
	}
	else
		 return redirect()->back();
}
}
