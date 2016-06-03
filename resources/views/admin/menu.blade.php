	<div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="/site/home" class="logo"><img src="{{asset('/images/logo.png')}}" style="width: 200px;"/></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('/assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="/admin/logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>

	<div class="left side-menu">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 705px;"><div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 705px;">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="/admin/home" class="waves-effect <?php if(Session::get('activemenu') == 'dashboard' ) echo 'active' ;?>"><i class="ti-home"></i> <span> Dashboard </span> </a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="/admin/listartist" class="waves-effect <?php if(Session::get('activemenu') == 'listartists' ) echo 'active' ;?>"><i class="ti-paint-bucket"></i> <span> List Artist </span> </a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="/admin/listalbum" class="waves-effect <?php if(Session::get('activemenu') == 'listalbums' ) echo 'active' ;?>"><i class="ti-light-bulb"></i><span> List Albums </span> </a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="/admin/uploadartist" class="waves-effect <?php if(Session::get('activemenu') == 'uploadartist' ) echo 'active' ;?>"><i class="ti-spray"></i> <span> Upload Artist  </span> </a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="/admin/uploadalbum" class="waves-effect <?php if(Session::get('activemenu') == 'uploadalbum' ) echo 'active' ;?> "><i class="ti-pencil-alt"></i><span> Upload Album </span></a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="/admin/adduser" class="waves-effect <?php if(Session::get('activemenu') == 'adduser' ) echo 'active' ;?> "><i class="ti-pencil-alt"></i><span> Add User</span></a>
                                
                            </li>

                            
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div><div class="slimScrollBar" style="width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 379.408px; visibility: visible; background: rgb(220, 220, 220);"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
            </div>