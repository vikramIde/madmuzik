<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Artist;

use App\Song;

use App\Album;

use Validator;

use View;

use Mail;

use Illuminate\Support\Facades\Input;

class WebsiteController extends Controller
{

    public function getIndex(){

        return redirect('/site/home');

    }

//here we added ....... ..

    public function getHome(){

        $featuredArtist=Artist::select('id','artist_name', 'artist_title','artist_image','artist_fb','artist_description')->where('artist_featured','=',1)->where('status','=','active')->get();

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
 
        $artistList = Artist::select('id','artist_name', 'artist_description','artist_title','artist_image')->get();
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
    public function getForm(){
       
      
         return view('website.form');
    }

    public function getConnect(){
        
        return view('website.connect');
    }
     

    public function postConnect(Request $request){

         $rules = array(
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
           
            );
         $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
            {

                return redirect('site/connect')->withErrors($validator);

            }else {

                        $data = Input::get();
                        $email = 'vikrambanand@gmail.com';

                            $x = $data;
                            //$data=array();

                            $data = [
                            'name' =>  $data['name'],
                            'email' =>  $data['email'],
                            'subject' =>  $data['subject'],
                            'messages' =>  $data['message']
                        
                            ];

                            Mail::send('emails.connect', $data, function ($message) use($email)  {

                            $message->from('admin@madmuzik.net', 'MadMuzik');

                            $message->to($email,'dsfsd')->subject('New request from madmuzik.net');

                        });

                        $request->session()->flash('alert-success', 'We will contact you shortly.!');
                        return redirect('site/connect');
                }

    }
    
}
