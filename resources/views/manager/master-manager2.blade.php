<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Table | PT ASTRA DIGITAL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- Bootstrap CSS
		============================================ -->
    {{-- <link rel="stylesheet" href="{{asset('assets/css_karyawan/bootstrap.min.css')}}"> --}}
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/owl.transitions.css')}}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/meanmenu/meanmenu.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/normalize.css')}}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/wave/waves.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/wave/button.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/notika-custom-icon.css')}}">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/jquery.dataTables.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/main.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css_karyawan/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
        @include('manager.layouts.navbar-page')
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    {{-- <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="form-components.html">Form Components</a></li>
                                        <li><a href="form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i>Need Approval Submission</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('manager.akses')}}">Request Form Akses </a>
                                </li>
                                <li><a href="{{route('manager.restore')}}">Request Form Restore</a>
                                </li>
                                <li><a href="{{route('manager.backup')}}">Request Form Backup</a>
                                </li>
                                <li><a href="{{route('manager.aksesKhusus')}}">Request Form Akses Khusus </a>
                                </li>
                                <li><a href="{{route('manager.nda')}}">Request Form Non Disclosure Agreement (NDA) </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                      <li><a data-toggle="tab" href="#Forms1"><i class="notika-icon notika-form"></i>Close Submission</a>
                      </li>
                  </ul>
                  <div class="tab-content custom-menu-content">
                      <div id="Forms1" class="tab-pane notika-tab-menu-bg animated flipInX">
                          <ul class="notika-main-menu-dropdown">
                              <li><a href="{{route('done.manager.akses')}}">Close Form Akses </a>
                              </li>
                              <li><a href="{{route('done.manager.restore')}}">Close Form Restore</a>
                              </li>
                              <li><a href="{{route('done.manager.backup')}}">Close Form Backup</a>
                              </li>
                              <li><a href="{{route('done.manager.aksesKhusus')}}">Close Form Akses Khusus </a>
                              </li>
                              <li><a href="{{route('done.manager.nda')}}">Close Form Non Disclosure Agreement (NDA) </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->

    @yield('content')
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- jquery
		============================================ -->
    <script src="{{asset('assets/js_karyawan/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    {{-- <script src="{{asset('assets/js_karyawan/bootstrap.min.js')}}"></script> --}}
    <!-- wow JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/jquery-price-slider.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/owl.carousel.min.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/jquery.scrollUp.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/meanmenu/jquery.meanmenu.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js_karyawan/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js_karyawan/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/js_karyawan/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/js_karyawan/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/js_karyawan/flot/flot-active.js')}}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('assets/js_karyawan/knob/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/js_karyawan/knob/knob-active.js')}}"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/chat/jquery.chat.js')}}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/todo/jquery.todo.js')}}"></script>
	<!--  wave JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/wave/waves.min.js')}}"></script>
    <script src="{{asset('assets/js_karyawan/wave/wave-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/plugins.js')}}"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/data-table/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js_karyawan/data-table/data-table-act.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('assets/js_karyawan/main.js')}}"></script>
	<!-- tawk chat JS
		============================================ -->
    {{-- <script src="{{asset('assets/js_karyawan/tawk-chat.js')}}"></script> --}}
</body>

</html>