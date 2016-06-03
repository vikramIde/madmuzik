@extends('admin.app')
@section('content')
	<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Upload Album</h4>
                                <ol class="breadcrumb">
                                    <li><a href="#">Madmuzik</a></li>
                                    <li><a href="#">Album</a></li>
                                    <li class="active">List Album</li>
                                </ol>
                            </div>
                        </div>
                        
                        <div class="row">
							
							
					<div class="col-lg-12">
						<div class="card-box">
						    <h4 class="m-t-0 header-title"><b>List Album</b></h4>
							<table class="table table-hover table-bordered">
                                <thead>
                                  <tr>
                                    <th>Album Name</th>
                                    <th>Album Code</th>
                                    <th>Album Featured</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                @foreach($albumList as $album)
                                    <tr>
                                    <td>{{$album->album_name}}</td>
                                    <td>{{$album->album_code}}</td>
                                    <td  ><a  onclick="alertIt(); return false;" class="btn <?php if($album->album_featured=="1")
                                                {
                                                    echo "btn-success"; $toglvar =0;
                                                }else {
                                                    echo "btn-danger"; $toglvar = 1;
                                                } ?> " href="{{ URL::to('/admin/toglealbumfeatured/'.$album->id.'_'.$toglvar ) }}">{{ $album->album_featured }} </a>
                                                </td>
                                    <td><a  class="btn btn-info" href="{{ URL::to('/admin/editalbum/'.$album->id ) }}">View More</a></td>
                                     </tr>               
                                @endforeach
                            </table>
						</div>
					</div> 
						</div> 
            		</div> <!-- container -->
                               
                </div> <!-- content -->

            </div>
            
@endsection
