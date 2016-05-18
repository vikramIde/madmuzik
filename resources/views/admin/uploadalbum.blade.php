@extends('admin.app')
@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea#spnotes' });</script>

	<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                
                                <ol class="breadcrumb">
                                    <li><a href="#">Madmuzik</a></li>
                                    <li><a href="#">Album</a></li>
                                    <li class="active">Upload Album</li>
                                </ol>
                            </div>
                        </div>
                        
                        <div class="row">
							
							
							<div class="col-lg-12">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Upload Album</b></h4>
									<p class="text-muted font-13 m-b-30">
	                                </p>
	                                 @if (count($errors) > 0)
				                        <div class="alert alert-danger">
				                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
				                            <ul>
				                              @foreach ($errors->all() as $error)
				                                <li>{{ $error }}</li>
				                              @endforeach
				                            </ul>
				                        </div>
				                      @endif

				                      <div class="flash-message">
				                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
				                          @if(Session::has('alert-' . $msg))

				                              <p class="alert alert-{{ $msg }}">
				                                {{ Session::get('alert-' . $msg) }} 
				                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;
				                                </a>
				                              </p>
				                          @endif
				                        @endforeach
				                      </div>
									<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/uploadalbum') }}"> 
										 <input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-4 control-label">Album Name</label>
											<div class="col-sm-7">
												<input  tye="text" required=""  name="name" class="form-control"  placeholder="Artist Name" >
											</div>
										</div>
										<div class="form-group">
											<label for="hori-pass2" class="col-sm-4 control-label">Album Title</label>
											<div class="col-sm-7">
												<input  type="text" required="" name="title" placeholder="Album Title" class="form-control" >
											</div>
										</div>

										<div class="form-group">
											<label for="hori-pass2" class="col-sm-4 control-label">Album Release Date</label>
											<div class="col-sm-7">
												<input  type="text" required="" name="releaseDate" placeholder="Album Title" class="form-control" >
											</div>
										</div>

										<div class="form-group">
											<label for="hori-pass2" class="col-sm-4 control-label">compiledBy</label>
											<div class="col-sm-7">
												<input  type="text" required="" name="compiledBy" placeholder="Album compiledBy" class="form-control" >
											</div>
										</div>

										<div class="form-group">
											<label for="hori-pass2" class="col-sm-4 control-label">mastering</label>
											<div class="col-sm-7">
												<input  type="text" required="" name="mastering" placeholder="Album mastering" class="form-control" >
											</div>
										</div>

										<div class="form-group">
											<label for="hori-pass2" class="col-sm-4 control-label">Artwork By</label>
											<div class="col-sm-7">
												<input  type="text" required="" name="artwork" placeholder="Album Artwork" class="form-control" >
											</div>
										</div>

										<div class="form-group">
											<label for="hori-pass2" class="col-sm-4 control-label">soundcloud </label>
											<div class="col-sm-7">
												<input  type="text" required="" name="soundcloud" placeholder="Album soundcloud" class="form-control" >
											</div>
										</div>

										<div class="form-group">
											<label for="hori-pass2" class="col-sm-4 control-label">youtube </label>
											<div class="col-sm-7">
												<input  type="text" required="" name="youtube" placeholder="Album youtube" class="form-control" >
											</div>
										</div>

										<!-- <div class="form-group">
											<label for="hori-pass1" class="col-sm-4 control-label">Artist Image</label>
											<div class="col-sm-7">
												<input id="hori-pass1 fileToUpload" type="file" name="fileToUpload" placeholder="Artist Image" required="" class="" data-parsley-id="19">
											</div>
										</div> -->
										
										<div class="form-group">
											<label for="webSite" class="col-sm-4 control-label">Album FB</label>
											<div class="col-sm-7">
												<input class="form-control" type="text"  name= "fb" placeholder="Album FB" >
											</div>
										</div>
										<!-- <div class="form-group">
											<label for="webSite" class="col-sm-4 control-label"></label>
											
										</div> -->
										
										<div class="form-group">
											<label for="webSite" class="col-sm-4 control-label">Album Description</label>
											<div class="col-sm-7">
												<textarea name="description" required="" class="form-control" id="spnotes" ></textarea>
											</div>
										</div>

										<div class="form-group">
											<label for="webSite" class="col-sm-4 control-label">Album Description</label>
											<div class="col-sm-7">
												<select class="form-control" name="artist" >
														@foreach($artistList as $artist)
														 <option value="{{ $artist->id  }}" >{{  $artist->artist_name }}</option>
														@endforeach
												</select>
											</div>
										</div>
										<!-- <div class="form-group">dgfdfgdfgdfg
											<div class="col-sm-offset-4 col-sm-8">
                                                <div class="checkbox">
                                                    <input id="remember-2" type="checkbox" data-parsley-multiple="remember-2" data-parsley-id="26">
                                                    <label for="remember-2"> Remember me </label>
                                                </div>
											</div>
										</div> -->
										<div class="form-group">
											<div class="col-sm-offset-4 col-sm-8">
												<input type="submit" value="Register" class="btn btn-primary waves-effect waves-light" />
													
												<input type="reset" value="Cancel" class="btn btn-default waves-effect waves-light m-l-5" />
												
											</div>
										</div>
									</form>
								</div>
							</div> 
						</div> 
                        
    
    
     

            		</div> <!-- container -->
                               
                </div> <!-- content -->

            </div>
@endsection
