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

    	 $albumList = Album::select('id','album_name', 'album_title','album_image_loc ')->get();
        //dd($artistList);
        return view('website.listalbum')->with(array('albumList'=>$albumList));
        //skljhkhkl
    	
    }

    public function getViewalbum(){

    	return view('website.viewalbum');
    	
    }

    public function getListartist(){
 
        $artistList = Artist::select('id','artist_name', 'artist_title','artist_image')->get();
        //dd($artistList);
    	return view('website.listartist')->with(array('artistList'=>$artistList));
        //skljhkhkl
    }

    public function getViewartist($id){

    	$artistDetail = Artist::where('id', $id)->get();
        
    	return view('website.viewartist')->with(array('artistDetail'=>$artistDetail));
    }

    public function getShop(){
    	
    	return view('website.shop');
    }

    public function getConnect(){
    	
    	return view('website.connect');
    }
}
