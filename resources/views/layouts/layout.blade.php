<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>GenBi (Generasi Baru Bank Indonesia)</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="/asset/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="/asset/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="/asset/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/asset/css/font.css" type="text/css" />
  <link rel="stylesheet" href="/asset/js/calendar/bootstrap_calendar.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="https://datatables.yajrabox.com/css/datatables.bootstrap.css">
  <link rel="stylesheet" href="/asset/css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
         <!-- <i class="fa fa-bars"></i> -->
        </a>
        <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="/asset/images/logo.png" class="m-r-sm">GenBi</a>
        <!--<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>-->
      </div>
      <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown">
         <!-- <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
            <i class="fa fa-building-o"></i> 
            <span class="font-bold">Activity</span>
          </a> -->
          <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
            <div class="wrapper lter m-t-n-xs">
              <a href="#" class="thumb pull-left m-r">
                <img src="/asset/images/avatar.jpg" class="img-circle">
              </a>
              <div class="clear">
                <a href="#"><span class="text-white font-bold">@Mike Mcalidek</a></span>
                <small class="block">Art Director</small>
                <a href="#" class="btn btn-xs btn-success m-t-xs">Upgrade</a>
              </div>
            </div>
            <div class="row m-l-none m-r-none m-b-n-xs text-center">
              <div class="col-xs-4">
                <div class="padder-v">
                  <span class="m-b-xs h4 block text-white">245</span>
                  <small class="text-muted">Followers</small>
                </div>
              </div>
              <div class="col-xs-4 dk">
                <div class="padder-v">
                  <span class="m-b-xs h4 block text-white">55</span>
                  <small class="text-muted">Likes</small>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <span class="m-b-xs h4 block text-white">2,035</span>
                  <small class="text-muted">Photos</small>
                </div>
              </div>
            </div>
          </section>
        </li>
        <li>
          <!--<div class="m-t m-l">
            <a href="price.html" class="dropdown-toggle btn btn-xs btn-primary" title="Upgrade"><i class="fa fa-long-arrow-up"></i></a>
          </div> -->
        </li>
      </ul>      
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="hidden-xs">
          <a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
            <i class="fa fa-bell"></i>
            <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span>
          </a>
          <section class="dropdown-menu aside-xl">
            <section class="panel bg-white">
              <header class="panel-heading b-light bg-light">
                <strong>You have <span class="count">2</span> notifications</strong>
              </header>
              <div class="list-group list-group-alt animated fadeInRight">
                <a href="#" class="media list-group-item">
                  <span class="pull-left thumb-sm">
                    <img src="asset/images/avatar.jpg" alt="John said" class="img-circle">
                  </span>
                  <span class="media-body block m-b-none">
                    Use awesome animate.css<br>
                    <small class="text-muted">10 minutes ago</small>
                  </span>
                </a>
                <a href="#" class="media list-group-item">
                  <span class="media-body block m-b-none">
                    1.0 initial released<br>
                    <small class="text-muted">1 hour ago</small>
                  </span>
                </a>
              </div>
              <footer class="panel-footer text-sm">
                <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
              </footer>
            </section>
          </section>
        </li>
        <li class="dropdown hidden-xs">
          <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i></a>
          <section class="dropdown-menu aside-xl animated fadeInUp">
            <section class="panel bg-white">
              <form role="search">
                <div class="form-group wrapper m-b-none">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </div>
              </form>
            </section>
          </section>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="{{ asset('asset/images/avatar.jpg') }}">
            </span>
            Yulia Oktaviani <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>
            <li>
              <a href="#">Settings</a>
            </li>
            <li>
              <a href="profile.html">Profile</a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-danger pull-right">3</span>
                Notifications
              </a>
            </li>
            <li>
              <a href="docs.html">Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} </a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </ul>
        </li>
      </ul>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-dark lter aside-md hidden-print" id="nav">          
          <section class="vbox">
           <!-- <header class="header bg-primary lter text-center clearfix">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i class="fa fa-plus"></i></button>
                <div class="btn-group hidden-nav-xs">
                  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                    Switch Project
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu text-left">
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Another Project</a></li>
                    <li><a href="#">More Projects</a></li>
                  </ul>
                </div>
              </div> 
            </header> -->
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">
                    <li  class="active">
                      <a href="index.html"   class="active">
                        <i class="fa fa-home">
                          <b class="bg-danger"></b>
                        </i>
                        <span>Home</span>
                      </a>
                    </li>

                    @if(!Auth::user()->hak_akses >= 1)
                    <li >
                      <a href="{{ route('datapribadi.index') }}">
                        <i class="fa fa-user">
                          <b class="bg-warning"></b>
                        </i>
                        <span>Data Pribadi</span>
                      </a>
                    </li>
                    @endif
                    
                    @if(Auth::user()->hak_akses >= 1)
                    <li>
                      <a href="#uikit">
                        <i class="fa fa-user">
                          <b class="bg-primary dker"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Data User</span>
                      </a>
                      <ul class="nav lt">

                        <li >
                          <a href="{{ route('datauser.index') }}">                                             
                            <i class="fa fa-angle-right"></i>
                            <span>Admin GenBi</span>
                          </a>
                        </li>

                        <li >
                          <a href="{{ route('datauser.index_genbi') }}" >            
                            <i class="fa fa-angle-right"></i>
                            <span>Anggota GenBi</span>
                          </a>
                        </li>


                      </ul>
                      </li>
                      @endif

                    <li>
                      <a href="#uikit">
                        <i class="fa fa-file-text icon">
                          <b class="bg-primary dker"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Kehadiran</span>
                      </a>
                      <ul class="nav lt">

                        @if(!Auth::user()->hak_akses >= 1)
                        <li >
                          <a href="{{ route('pertemuan.pertemuan') }}" >             
                            <i class="fa fa-angle-right"></i>
                            <span>Absen</span>
                          </a>
                        </li>
                        @endif
                        

                        @if(Auth::user()->hak_akses >= 1)
                        <li >
                          <a href="{{ route('jenispertemuan.index') }}">                                             
                            <i class="fa fa-angle-right"></i>
                            <span>Jenis Pertemuan</span>
                          </a>
                        </li>

                        <li >
                          <a href="{{ route('pertemuan.index') }}" >            
                            <i class="fa fa-angle-right"></i>
                            <span>Kelola Pertemuan</span>
                          </a>
                        </li>

                        <li >
                          <a href="{{ route('rekap_absensi.index') }}" >                                                         
                            <i class="fa fa-angle-right"></i>
                            <span>Kehadiran</span>
                          </a>
                        </li>
                       <!-- <li>
                          <a href="widgets.html" >                            
                            <b class="badge  pull-right">8</b>                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Rekap Kehadiran</span>
                          </a>
                        </li> -->
                        @endif
                      </ul>
                      </li>


                    @if(Auth::user()->hak_akses >= 1)
                    <li >
                      <a href="{{ route('prestasi.index') }}">
                        <i class="fa fa-cloud">
                          <b class="bg-success"></b>
                        </i>
                        <span>Prestasi GenBi</span>
                      </a>
                    </li>
                    @endif

                    @if(!Auth::user()->hak_akses >= 1)
                    <li >
                      <a href="{{ route('prestasi.index_id') }}">
                        <i class="fa fa-cloud">
                          <b class="bg-success"></b>
                        </i>
                        <span>Prestasi</span>
                      </a>
                    </li>
                    @endif


                    @if(Auth::user()->hak_akses >= 1)
                    <li>
                      <a href="{{ route('kegiatan.index') }}">
                        <i class="fa fa-camera">
                          <b class="bg-primary"></b>
                        </i>
                        <span>Kegiatan</span>
                      </a>
                    </li>
                    @endif

                    
                    @if(Auth::user()->hak_akses >= 1)
                    <li >
                      <a href="{{ route('artikel.index') }}"  >
                        <i class="fa fa-pencil icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Artikel</span>
                      </a>
                    </li>
                    @endif


                    

                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer lt hidden-xs b-t b-dark">
              <div id="chat" class="dropup">
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">Active chats</header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No active chats.</p>
                      <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <div id="invite" class="dropup">                
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">
                      John <i class="fa fa-circle text-success"></i>
                    </header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No contacts in your lists.</p>
                      <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                <i class="fa fa-angle-left text"></i>
                <i class="fa fa-angle-right text-active"></i>
              </a>
              <div class="btn-group hidden-nav-xs">
                <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
                <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
              </div>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Workset</li>
              </ul>
           <!--   <div class="m-b-md">
                <h3 class="m-b-none">Workset</h3>
                <small>Welcome back, Noteman</small>
              </div> -->
      
              @yield('content')
          </section>
        </section>
          
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
  <script src="/asset/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="/asset/js/bootstrap.js"></script>
  <!-- App -->
  <script src="/asset/js/app.js"></script>
  <script src="/asset/js/app.plugin.js"></script>
  <script src="/asset/js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/asset/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="/asset/js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="/asset/js/charts/flot/jquery.flot.min.js"></script>
  <script src="/asset/js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="/asset/js/charts/flot/jquery.flot.resize.js"></script>
  <script src="/asset/js/charts/flot/jquery.flot.grow.js"></script>
  <script src="/asset/js/charts/flot/demo.js"></script>

  <script src="/asset/js/calendar/bootstrap_calendar.js"></script>
  <script src="/asset/js/calendar/demo.js"></script>

  <script src="/asset/js/sortable/jquery.sortable.js"></script>

  @yield('scripts')

</body>
</html>