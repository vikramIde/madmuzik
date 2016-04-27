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

    public function getIndex(){

        return redirect('/');

    }

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
 
        $artistList = Artist::select('artist_name', 'artist_title','artist_image_loc')->get();
        //dd($artistList);
    	return view('website.listartist')->with(array('artistList'=>$artistList));
    }

    public function getViewartiste($id){
    	$artistDetail = Artist::where('id', $id)->get();
        dd($artistDetail);
    	return view('website.viewartist')->with(array('artistDetail'=>$artistDetail));
    }

    public function getDonate(){
    	
    	return view('website.donate');
    }

    public function getContact(){
    	
    	return view('website.contact');
    }
}
