<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\File;

use Validator;

use App\User;

use App\Artist;

use App\Album;

use Image;

use Mail;

use Illuminate\Support\Facades\Auth;

use Session;

class AdminController extends Controller
{
    public function __construct(){

        $this->middleware('auth',array('except' => array('getLogin','postLogin')));
    }

    public function getIndex(){
      
        return redirect('admin/home');

    }

    public function getLogin(){
        return view('admin/welcome');
    }

    public function getLogout(){

            Session::flush();
            Auth::logout();
            return Redirect('admin/login');
    }

    public function postLogin(){
        
        $cred = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );

        $role = User::where('email','=',Input::get('email'))->first();

        if (Auth::attempt($cred)){

            if (Auth::check()){
                
                Session::put('adminrole','admin');
                Session::put('username',Auth::user()->name);
                return redirect('admin/home');
            }
            else{
                Session::flush();
                Auth::logout();
                return redirect('admin/login')->with('login_errors',true);
            }
        } else{
                Session::flush();
                Auth::logout();
                return redirect('admin/login')->with('login_errors',true);
            }
    }

    public function getHome(){
        Session::put('activemenu', 'dashboard');
        return view('admin/home');

    }

   
/** 
    All Album Related Functions
    
**/

    public function getUploadalbum(){
         Session::put('activemenu', 'uploadalbum');
        $artistList = Artist::select('id','artist_name')->get();
        return view('admin.uploadalbum')->with(array('artistList'=>$artistList));
    }

     public function getListalbum(){
        Session::put('activemenu', 'listalbums');
        $albumList = Album::with(['artist'])->select('id','album_name','album_code','album_featured', 'album_art')->get();
        
        //dd($albumList);
        return view('admin.listalbum')->with(array('albumList'=> $albumList));
        
    }

    public function getEditalbum($id){
            Session::put('activemenu', 'listalbums');
            $albumDetails = Album::where('id', $id)->get();
            return view('admin.editalbum')->with( array('albumDetails' => $albumDetails));
    }

    public function postEditalbum(Request $request){
                Session::put('activemenu', 'listalbums');
                $album = Album::find(Input::get('id'));

                //dd($album);
                if(!empty(Input::get('name')))
                $album->album_name= Input::get('name');

                if(!empty(Input::get('fb')))
                $album->album_facebook= Input::get('fb');

                if(!empty(Input::get('releaseDate')))
                $album->album_release_date= Input::get('releaseDate');

                if(!empty(Input::get('compiledBy')))
                $album->album_compiled_by= Input::get('compiledBy');

                if(!empty(Input::get('mastering')))
                $album->album_mastering= Input::get('mastering');

                if(!empty(Input::get('artwork')))
                $album->album_artwork= Input::get('artwork');

                if(!empty(Input::get('soundcloud')))
                $album->album_soundcloud= Input::get('soundcloud');

                 if(!empty(Input::get('youtube')))
                $album->album_youtube= Input::get('youtube');

                 if(!empty(Input::get('description')))
                $album->album_description= Input::get('description');


                $album->save();

                $request->session()->flash('alert-success', 'album Updated!');

                return redirect()->back();

    }
    public function postUploadalbum(Request $request){

         $artistList = Artist::select('id','artist_name')->get();
        Session::put('activemenu', 'uploadalbum');
         $rules = array(
                        'name' =>'required|max:255',
                        'description' =>'required',
                        'image_small'=>'mimes:jpeg,bmp,png',
                        'image_big'=>'mimes:jpeg,bmp,png'
            );

          $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails())
            {

                return redirect('admin/uploadalbum')->withErrors($validator);

            }else {

                    $album = new Album();

                    $album->album_name= Input::get('name');
                    //$album->album_title= Input::get('title');
                    $album->album_release_date= Input::get('releaseDate');
                    $album->album_compiled_by= Input::get('compiledBy');
                    $album->album_mastering= Input::get('mastering');
                    $album->album_artwork= Input::get('artwork');
                    $album->album_soundcloud= Input::get('soundcloud');
                    $album->album_youtube= Input::get('youtube');
                    //$album->album_youtubeVideo= Input::get('youtubeVideo');
                    $album->album_facebook= Input::get('fb');
                    $album->artist_id= Input::get('artist');
                    $album->album_description= Input::get('description');

                    $inv='MAD_ALBUM';
                    $dateValue=date('d-m-Y');
                    $time=strtotime($dateValue);
                    $year=date("Y",$time);
                    $count = Album::max('id');
                    if(is_null ($count))
                        $count=0;

                    $count = $count+1;
                    $counti = str_pad($count, 4, '0', STR_PAD_LEFT);
                    $albumcode=$inv.'-'.''.$year.'-'.''.$counti;

                    $album->album_code = $albumcode;
                
                 if(Input::hasFile('image_small')){

                    $image = Input::file('image_small');
                    $filename = $image->getClientOriginalName();

                    if (!File::exists(public_path('images/album/small/'.$albumcode.'/'.$filename))){ 
                    $path = public_path('images/album/small/'.$albumcode);

                    // dd(public_path('images/album/'.$albumcode));

                    File::makeDirectory(public_path('images/album/small/'.$albumcode));
                    Image::make($image->getRealPath())->resize(256,256)->save($path.'/'.$filename);

                    $album->album_art = 'images/album/small/'.$albumcode.'/'.$filename ;

                    }
                }

                if(Input::hasFile('image_big')){

                    $image1 = Input::file('image_big');
                    $filename = $image1->getClientOriginalName();

                    if (!File::exists(public_path('images/album/large/'.$albumcode.'/'.$filename))){ 
                    $path = public_path('images/album/large/'.$albumcode);

                    File::makeDirectory(public_path('images/album/large/'.$albumcode));
                    Image::make($image1->getRealPath())->resize(1140,1140)->save($path.'/'.$filename);

                    $album->album_mainart = 'images/album/large/'.$albumcode.'/'.$filename ;

                    }

                } 

                $album->save();
            }

        $request->session()->flash('alert-success', 'Album Added Successfull ');
        return view('admin.uploadalbum');
    }

public function getToglealbumfeatured($idstatus){

      Album::where('album_featured','=',1)->update(array('album_featured'=>0));

     $x = explode("_", $idstatus);

     $album = Album::find(trim($x[0]));

     $album->album_featured = $x[1];
     $album->save();

     return redirect()->back();
}

/** 
    All Artist Related Functions
    
**/
     public function getUploadartist(){
         Session::put('activemenu', 'uploadartist');
        return view('admin.uploadartist');
    }

    public function postUploadartist(Request $request ){
        Session::put('activemenu', 'uploadartist');
         $rules = array(
            'artistname' =>'required|max:255',
            'title' =>'required|max:255'
            //'description'=>'required|min:255'

            //'empid'=>'required' /**For future use **/
            );

          $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails())
            {

                return redirect('admin/uploadartist')->withErrors($validator);

            }else {

                $artist = new Artist();

                $artist->artist_name= Input::get('artistname');
                $artist->artist_title= Input::get('title');

                if(!empty(Input::get('fb')))
                $artist->artist_fb= Input::get('fb');

                if(!empty(Input::get('soundcloud')))
                $artist->artist_soundcloud= Input::get('soundcloud');

                if(!empty(Input::get('phone')))
                $artist->artist_phone= Input::get('phone');

                if(!empty(Input::get('addresse')))
                $artist->artist_address= Input::get('addresse');

               // if(!empty(Input::get('description')))
                $artist->artist_description= Input::get('description');

                $artist->status ='inactive' ;

                $inv='MAD_ARTIST';
                $dateValue=date('d-m-Y');
                $time=strtotime($dateValue);
                $year=date("Y",$time);
                $count = Artist::max('id');

                if(is_null($count))
                     $count=0;

                $count = $count+1;
                $counti = str_pad($count, 4, '0', STR_PAD_LEFT);
                $artistcode=$inv.'-'.''.$year.'-'.''.$counti;

                $artist->artist_code = $artistcode;

                if(Input::hasFile('image'))
                {
                    $image1 = Input::file('image');
                    $filename = $image1->getClientOriginalName();              

                    if (!File::exists(public_path('images/artist/'.$artistcode.'/'.$filename))){ 
                    $path = public_path('images/artist/'.$artistcode);

                    File::makeDirectory(public_path('images/artist/'.$artistcode));
                    Image::make($image1->getRealPath())->resize(256,256)->save($path.'/'.$filename);

                    $artist->artist_image = 'images/artist/'.$artistcode.'/'.$filename ;

                    }
                } 

                $artist->save();
            }

        $request->session()->flash('alert-success', 'Artist Added Successfull ');
        return view('admin.uploadartist');
    }

    public function getListartist(){
        Session::put('activemenu', 'listartists');
        $artistList = Artist::select('id','artist_name', 'artist_featured','artist_title','status')->get();

        return view('admin.listartist')->with(array('artistList'=>$artistList));
        
    }

    public function getViewartist($id){
         Session::put('activemenu', 'listartists');
        $artistDetail = Artist::where('id', $id)->get();
        
        return view('admin.viewartist')->with(array('artistDetail'=>$artistDetail,'randomArtistlist'=>$randomArtistlist,'randomAlbumlist'=>$randomAlbumlist));

    }

   

    

    public function getEditartist($id){
         Session::put('activemenu', 'listartists');
        $artistDetail = Artist::where('id', $id)->get();
        
        return view('admin.editartist')->with(array('artistDetail'=>$artistDetail));

    }


public function postEditartist(Request $request){
     Session::put('activemenu', 'listartists');
                $artist = Artist::find(Input::get('id'));

                $artist->artist_name= Input::get('artistname');

                $artist->artist_title= Input::get('title');

                if(!empty(Input::get('fb')))
                $artist->artist_fb= Input::get('fb');

                if(!empty(Input::get('soundcloud')))
                $artist->artist_soundcloud= Input::get('soundcloud');

                if(!empty(Input::get('status')))
                $artist->status= Input::get('status');

                if(!empty(Input::get('phone')))
                $artist->artist_phone= Input::get('phone');

                if(!empty(Input::get('addresse')))
                $artist->artist_address= Input::get('addresse');

                if(!empty(Input::get('description')))
                $artist->artist_description= Input::get('description');

                $artist->save();

                $request->session()->flash('alert-success', 'Artist Updated!');

                return redirect()->back();

    }

public function getTogleartiststatus($idstatus){
     Session::put('activemenu', 'listartists');
     $x = explode("_", $idstatus);

     $artist = Artist::find(trim($x[0]));

     $artist->status = $x[1];
     $artist->save();

     return redirect()->back();
}


public function getTogleartistfeatured($idstatus){

      Artist::where('artist_featured','=',1)->update(array('artist_featured'=>0));

     $x = explode("_", $idstatus);

     $album = Artist::find(trim($x[0]));

     $album->artist_featured = $x[1];
     $album->save();

     return redirect()->back();
}


public function getDeleteartist($id){
     Session::put('activemenu', 'listartists');
    $artist = Artist::find(trim($id));

    $artist->status = 'inactive';

    $artist->artist_featured = 0;

    Album::where('artist_id',$id)->update(array('status' => 'inactive','album_featured'=>0));

    return redirect()->back();

}

/** Artist functions ends here **/ 

 public function getAdduser(){
                Session::put('activemenu', 'adduser');
                return View('admin/adduser');
    }

public function postUser(Request $request){
            Session::put('activemenu', 'adduser');
            $rules = array(
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6'
            //'empid'=>'required' /**For future use **/
            );

            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails())
            {

                return redirect('admin/adduser')->withErrors($validator);

            }else {

                        $data = Input::get();
                        $role='admin';
                        $email = $data['email'];

                        User::create([
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'password' => bcrypt($data['password'])
                        ]);
                            $x = $data;
                            //$data=array();

                            $data = [
                            'data' =>  $data['name'],
                            'password' => $data['password']
                            ];

                            Mail::send('emails.verify', $data, function ($message) use($email)  {

                            $message->from('admin@madmuzik.net', 'MadMuzik');

                            $message->to($email,'dsfsd')->subject('Login Credentials for madmuzik.net');

                        });

                        $request->session()->flash('alert-success', 'User added!');
                        return redirect('admin/adduser');
                }

        }

}
