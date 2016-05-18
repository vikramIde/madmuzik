@extends('admin.app')
@section('content')
	<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Upload Artist</h4>
                                <ol class="breadcrumb">
                                    <li><a href="#">Madmuzik</a></li>
                                    <li><a href="#">Artist</a></li>
                                    <li class="active">List Artist</li>
                                </ol>
                            </div>
                        </div>
                        
                        <div class="row">
							
							
							<div class="col-lg-12">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>List Artist</b></h4>
									<table class="table table-hover table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Artist Name</th>
                                            <th>Title</th>
                                            <th>Artist Status</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                        @foreach($artistList as $artist)
                                            <tr>
                                            <td>{{$artist->artist_name}}</td>
                                            <td>{{$artist->artist_title}}</td>
                                            <td  ><a  class="btn <?php if($artist->status=="active")
                                                        {
                                                            echo "btn-success"; $toglvar = "inactive";
                                                        }else {
                                                            echo "btn-danger"; $toglvar = "active";
                                                        } ?> " href="{{ URL::to('/admin/togleartiststatus/'.$artist->id.'_'.$toglvar ) }}">{{ $artist->status }} </a>
                                                        </td>
                                            <td><a class="btn btn-info" href="{{ URL::to('/admin/editartist/'.$artist->id ) }}">View More</a></td>
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
