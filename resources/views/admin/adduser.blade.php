@extends('admin.app')
@section('content')
  <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Admin</h4>
                                <ol class="breadcrumb">
                                    <li><a href="#">Madmuzik</a></li>
                                    <li><a href="#">Admin</a></li>
                                    <li class="active">Create User</li>
                                </ol>
                            </div>
                        </div>
                        
            <div class="row">

            <div class="col-lg-12">
                <div class="card-box">
                  <h4 class="m-t-0 header-title"><b>Create User</b></h4>
                    <p class="text-muted font-13 m-b-30"></p>

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

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/user') }}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-4">
                              <input type="text" class="form-control" name="name">
                            </div>
                          </div>
                          <!-- <div class="form-group">
                            <label class="col-md-4 control-label">Emp Id</label>
                            <div class="col-md-4">
                              <input type="text" class="form-control" name="empid">
                            </div>
                          </div> -->

                          <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-4">
                              <input type="email" class="form-control" name="email" >
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-4">
                              <input type="password" class="form-control" name="password">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-4">
                              <input type="password" class="form-control" name="password_confirmation">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                Add
                              </button>
                            </div>
                          </div>
                        </form>
                </div>
                </div>
                                  
                </div><!-- row-->

              </div><!-- contentpanel -->
                        
    
    
     

                </div> <!-- container -->
                               
                </div> <!-- content -->

            </div>
@endsection
