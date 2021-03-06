<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Artist;
use App\Song;
use App\Album;
use View;

class WebsiteController extends Controller
{

    public function getIndex(){

        return redirect('/');

    }

//here we added ....... ..

    public function getHome(){

        $featuredArtist=Artist::select('id','artist_name', 'artist_title','artist_image','artist_fb','artist_description')->where('artist_featured','=',1)->get();

        $featuredAlbum=Album::select('id','album_name', 'album_art','album_facebook','album_description')->where('album_featured','=',1)->get();

        $featuredSong='';
        //dd($featuredAlbum);
        return view('website.welcome')->with(array('featuredArtist'=>$featuredArtist,'featuredAlbum'=>$featuredAlbum));

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

            $randomAlbumlist = Album::select('id','album_name', 'album_art','album_description')->orderByRaw("RAND()")->take(2)->get(); 

            $randomArtistlist = Artist::select('id','artist_name', 'artist_title','artist_image')->orderByRaw("RAND()")->take(2)->get(); 
        

           // dd($randomAlbumlist);

            return view('website.viewalbum')->with( array('albumDetails' => $albumDetails,'randomArtistlist'=>$randomArtistlist,'randomAlbumlist'=>$randomAlbumlist));
           
        
    }

    public function getListartist(){
 
        $artistList = Artist::select('id','artist_name', 'artist_title','artist_image')->get();
        return view('website.listartist')->with(array('artistList'=>$artistList));
        
    }

    public function getViewartist($id){

        $artistDetail = Artist::where('id', $id)->get();

         $randomAlbumlist = Album::select('id','album_name', 'album_art','album_description')->orderByRaw("RAND()")->take(2)->get(); 

        $randomArtistlist = Artist::select('id','artist_name', 'artist_title','artist_image')->orderByRaw("RAND()")->take(2)->get(); 
        
        return view('website.viewartist')->with(array('artistDetail'=>$artistDetail,'randomArtistlist'=>$randomArtistlist,'randomAlbumlist'=>$randomAlbumlist));

    }


    public function getShop(){
          $albumList = Album::with(['artist'])->select('id','album_name', 'album_art')->get();
        
        return view('website.shop')->with(array('albumList'=> $albumList));
        // return view('website.shop');
    }


    public function getConnect(){
        
        return view('website.connect');
    }
     public function getForm(){
       
      
         return view('website.form');
    }
    
}
