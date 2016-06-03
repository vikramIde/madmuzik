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
									<form class="form-horizontal" role="form"  enctype="multipart/form-data" method="POST" action="{{ url('/admin/uploadartist') }}"> 
										 <input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Name</label>
											<div class="col-sm-7">
												<input  tye="text"   value="{{old('artistname')}}" name="artistname" class="form-control"  placeholder="Artist Name" >
											</div>
										</div>
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Title</label>
											<div class="col-sm-7">
												<input  type="text" value="{{old('title')}}" name="title" placeholder="Artist Title" class="form-control" >
											</div>
										</div>
										<div class="form-group">
											<label for="hori-pass2" class="col-sm-4 control-label">soundcloud ID</label>
											<span style="font-size: 12px;margin-left: 10px;color: rgb(149, 59, 10);"><a href="https://helgesverre.com/soundcloud/" target="_blank" >To get the ID go to This url and add your user name in the box and click on get id </a></span><br/>
											<div class="col-sm-7">
												<input  type="text" name="soundcloud" placeholder="Artist Title" value="{{old('soundcloud')}}" class="form-control" >
											</div>
										</div>
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Image</label>
											<div class="col-sm-7">
												<input  type="file"  name="image" placeholder="Artist Image" class="form-control" >
											</div>
										</div>
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist FB</label>
											<div class="col-sm-7">
												<input class="form-control" value="{{old('fb')}}" type="text"  name= "fb" placeholder="Artist FB" >
											</div>
										</div>
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Phone</label>
											<div class="col-sm-7">
												<input type="text" value="{{old('phone')}}" name= "phone" class="form-control"  placeholder="Phone" >
											</div>
										</div>
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Address</label>
											<div class="col-sm-7">
												<textarea value="{{old('addresse')}}"  name="addresse" class="form-control" id="Album" ></textarea>
											</div>
										</div>
								
										
										<div class="form-group">
											<label  class="col-sm-4 control-label">Artist Description</label>
											<div class="col-sm-7">
												<textarea name="description" value="{{old('description')}}" class="form-control" id="spnotes" ></textarea>
											</div>
										</div>

										<div class="form-group">
											<label  class="col-sm-4 control-label">Followers</label>
											<div class="col-sm-7">
												<input type="text"  name= "follower" placeholder="Followers" >
											</div>
										</div>
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
