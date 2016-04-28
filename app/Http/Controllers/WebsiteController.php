<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Artist;
use App\Song;
use App\Album;

class WebsiteController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function getIndex(){

        return redirect('/');

    }

    public function getHome(){

        $featuredArtist='';
        $featuredAlbum='';
        $featuredSong='';

        return view('website.welcome')->with(array('featuredArtist'=>$featuredArtist,'featuredSong'=>$featuredSong,'featuredAlbum'=>$featuredAlbum));

    }

    public function getAboutus(){
        
        return view('website.aboutus');
    }

    public function getPartycalender(){
        
        return view('website.partycalender');
    }

    public function getListalbums(){

        $albumList = Album::with(['artist'])->select('id','album_name', 'album_art')->get();
        
        //dd($albumList);
        return view('website.listalbums')->with(array('albumList'=> $albumList));
        
    }

    public function getViewalbum($id){

            $albumDetails = Album::where('id', $id)->get();

            return view('website.viewalbum')->with( array('albumDetails' => $albumDetails ));
        
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
