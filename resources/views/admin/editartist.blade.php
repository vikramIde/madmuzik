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
                                    <li><a href="#">Artist</a></li>
                                    <li class="active">Upload Artist</li>
                                </ol>
                            </div>
                        </div>
                        
                        <div class="row">
							
							
							<div class="col-lg-12">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Upload Artist</b></h4>
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
			                      @foreach($artistDetail as $artist)
									<form class="form-horizontal" role="form"  enctype="multipart/form-data" method="POST" action="{{ url('/admin/editartist/') }}"> 

										 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
										 <input type="hidden" name="id" value="{{$artist->id}}" />
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Name</label>
											<div class="col-sm-7">
												<input  tye="text"   value="{{ $artist->artist_name }}" name="artistname" class="form-control"  placeholder="Artist Name" >
											</div>
										</div>
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Title</label>
											<div class="col-sm-7">
												<input  type="text" value="{{ $artist->artist_title }}" name="title" placeholder="Artist Title" class="form-control" >
											</div>
										</div>
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Sound Cloud</label>
											<div class="col-sm-7">
												<input  type="text" value="{{ $artist->artist_soundcloud }}" name="soundcloud" placeholder="Artist SoundCloud" class="form-control" >
											</div>
										</div>
										
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist FB</label>
											<div class="col-sm-7">
												<input class="form-control" value="{{ $artist->artist_fb }}" type="text"  name= "fb" placeholder="Artist FB" >
											</div>
										</div>
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Phone</label>
											<div class="col-sm-7">
												<input type="text" value="{{ $artist->artist_phone }}" name= "phone" class="form-control"  placeholder="Phone" >
											</div>
										</div>
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Address</label>
											<div class="col-sm-7">
												<textarea  name="addresse" class="form-control" id="Album" >{{ $artist->artist_address }}</textarea>
											</div>
										</div>
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Status</label>
											<div class="col-sm-7">
												<select class="form-control" name="status" >
													<option value="active" <?php if($artist->status=="active"){ echo "selected"; } ?> >Active</option>
													<option value="inactive" <?php if($artist->status=="inactive"){ echo "selected"; } ?> >In-ctive</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Description</label>
											<div class="col-sm-7">
												<textarea name="description"  class="form-control" id="spnotes" >{{ $artist->artist_description }}</textarea>
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-offset-4 col-sm-8">
												<input type="submit" value="Update" class="btn btn-primary waves-effect waves-light" />
													
												<input type="reset" value="Cancel" class="btn btn-default waves-effect waves-light m-l-5" />
											</div>
										</div>
									</form>
								@endforeach
								</div>
							</div> 
						</div> 
            		</div> <!-- container -->
                               
                </div> <!-- content -->

            </div>
@endsection
