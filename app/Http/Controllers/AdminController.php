<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Admin extends Controller
{
	    public function getIndex(){

    	return view('admin/welcome');

    }
    public function getHome(){

    	return view('admin/welcome');

    }
	
}
