<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Artist;

class WebsiteController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


    public function getHome(){

    	return view('website.welcome');

    }

    public function getAboutus(){
    	
    	return view('website.aboutus');
    }

    public function getPartycalender(){
    	
    	return view('website.partycalender');
    }

    public function getListalbums(){

    	return view('website.listalbums');
    	
    }

    public function getViewalbum(){

    	return view('website.viewalbum');
    	
    }

    public function getListartiste(){

        $artistList = Artist::all();
        //dd($artistList);
    	return view('website.listartist')->with(array('artistList'=>$artistList));
    }

    public function getViewartiste($id){
    	
    	return view('website.viewartiste');
    }

    public function getDonate(){
    	
    	return view('website.donate');
    }

    public function getContact(){
    	
    	return view('website.contact');
    }
}
