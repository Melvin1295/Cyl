<!DOCTYPE html>
<html ng-app="pages">
<head>

    <!-- ==========================
    	Meta Tags 
    =========================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <script>
                  $(document).ready(function() {
                   /* Try to dis-comment this:
                   $('#a').click(function () {
                    alert('jQuery.click()');
                    return true;
                   });
                   */
                  });
                  function button_onClick() {
                   $('#a').click();
                   
                  }
                  function Redirect() {
                    window.location="/pages/editoriales";
                   }
                   function Redirect1() {
                    window.location="/pages";
                   }
                   function logaout() {
                    window.location="/auth/logout";
                   }
             </script>
    <!-- ==========================
    	Title 
    =========================== -->
    <title>Cyl</title>
    
    <!-- ==========================
    	Favicons 
    =========================== -->
    <link rel="shortcut icon" href="assets/icons/favicon.ico">
	<link rel="apple-touch-icon" href="assets/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/icons/apple-touch-icon-114x114.png">
    
    <!-- ==========================
    	Fonts 
    =========================== -->
   
    <!-- FontAwesome 4.3.0 -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="/vendor/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/vendor/adminlte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/creative-brands.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/color-switcher.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/color/red.css') }}" rel="stylesheet">


@section('base_url')
@show

@section('css-customize')
@show
   <!-- ==========================
    	SCROLL TOP - START 
    =========================== -->
    <body >
    <div id="scrolltop" class="hidden-xs"><i class="fa fa-chevron-up"></i></div>
    <!-- ==========================
    	SCROLL TOP - END 
    =========================== -->
    
    <!-- ==========================
    	COLOR SWITCHER - START
    =========================== -->
    <div id="color-switcher">
        <div id="toggle-switcher"><i class="fa fa-gear"></i></div>
        <span>Color Scheme:</span>
        <ul class="list-unstyled list-inline">
            <li id="red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Red"></li>
            <li id="blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Blue"></li>
            <li id="orange" data-toggle="tooltip" data-placement="top" title="" data-original-title="Orange"></li>
            <li id="green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Green"></li>
            <li id="purple" data-toggle="tooltip" data-placement="top" title="" data-original-title="Purple"></li>
            <li id="light-blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Light Blue"></li>
            <li id="light-green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Light Green"></li>
            <li id="brown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Brown"></li>
            <li id="yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="Yellow"></li>
            <li id="pink" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pink"></li>
        </ul>
    </div>
    <?php $nuevo = Auth()->user()->nuevo; ?>
  <header class="navbar navbar-default navbar-static-top" >
    	<div class="container">
            <div class="navbar-header">
                <a href="/pages" onclick="myFunction()" class="navbar-brand"><img src="/images/logo.png" style="width:50px;" class="img-responsive" alt=""></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
            </div>
            <div class="navbar-collapse collapse">
            	<ul class="nav navbar-nav">
                  @if($nuevo==2)
                	<li class="active" ><a href="/pages" onclick="myFunction()">Mi Area</a></li>                  
                   
                    <li><a href="/pages/blog" onclick="myFunction()">Mis Postulaciones</a></li>
                    <li><a href="/pages/indicadores" onclick="myFunction()">Buscar Avizos</a></li>
                    <li><a href="/pages/editoriales" onclick="myFunction()">Mi Curriculum</a></li>    
                   @endif              
                </ul>
                <div class="navbar-right hidden-xs">
                	<form id="search-form" class="hidden-xs hidden-sm">
                    	<fieldset>
                            <div class="input-group">
                            	<ul class="nav navbar-nav">

                <style type="text/css">
                 .imgLogin{
                          width: 25px;
  height: 25px;
  border-radius: 50%;
  border-top-left-radius: 50%;
  border-top-right-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
  margin-right: 10px;
  margin-top: 4px;
                 }
                </style>

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-top: -5px;
  width: 250px;">
                  <img src="{{Auth()->user()->image}}" class="user-image imgLogin" alt="User Image" />
                  <span class="hidden-xs"> @if(!empty(Auth()->user())){{Auth()->user()->name}} @else Not user @endif</span>
                  <!--
                  @if(!empty(Auth::user()))
                  {{Auth::user()->name}}
                  @else
                  {{'No estas logueado'}}
                  @endif
                  </span>
                  -->
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header" style="  text-align: center;">
                    <img src="{{Auth()->user()->image}}" style="  width: 70px;" class="img-circle" alt="User Image" />
                    <p>
                    @if(!empty(Auth()->user()))
                      {{Auth()->user()->name}}
                      <small>Miembro desde {{Auth()->user()->created_at}}</small>
                    <p class="text-muted text-center">{{Auth()->user()->email}}</p>
                      @else
                        Not user
                        <small>Miembro desde --</small>
                      @endif
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!--<li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left" style="    margin-bottom: 10px;">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right" style="    margin-left: 85px;  margin-bottom: 10px;">
                      <a  onclick="logaout()" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
             
            </ul>
                            </div>
                        </fieldset>
                    </form>
                	
                </div>
            </div>
        </div>
                     
        </header>
       
     
    

    
    
  <div class="content-wrapper">
       @yield('content')         
          @if($nuevo == 1 && Request::path() != 'pages/editoriales')
            <body onload="Redirect()">             
                    
            </body>
          @endif
          @if(Request::is('/') && $nuevo == 2)
             <body onload="Redirect1()">             
                    
            </body>
          @endif
  </div>
  
</body>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbF3aN2aKHhnjrRjSHhUlBPzN53whHB60&callback=myMap"></script>
  <script src="{{ asset('/vendor/angular/angular.js') }}"></script>
  <script src="/vendor/moment/moment.js"></script>
  <script src="/vendor/angular-route/angular-route.js"></script>
  <script src="/vendor/angular-sanitize/angular-sanitize.js"></script>
  <script src="/vendor/angular-ui-router/release/angular-ui-router.js"></script>
  <script src="/vendor/angular-socket-io/socket.js"></script>
  <script src="/js/app/routes.js"></script>
  <script src="/js/app/servicesglobal.js"></script>
  <script src="/vendor/angular-bootstrap/ui-bootstrap-tpls.js"></script>
  
   <script src="/js/app/pages/app.js"></script>
    <script src="/js/app/pages/controllers.js"></script>

    <script src="{{ asset('assets/js/jquery-latest.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/typed.min.js') }}"></script>
    <script src="{{ asset('assets/js/creative-brands.js') }}"></script>
    <script src="{{ asset('assets/js/color-switcher.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    
 @section('js-customize')
 @show
 <!-- ==========================
    	FOOTER - START
    =========================== --> 
    <footer class="navbar">
    	<div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p>© Supreme 2013 - 2015 All right reserved. Designed by <a href="http://pixelized.cz/" target="_blank">Pixelized Studio</a>.</p>
                </div>
                <div class="col-sm-4">
                    <ul class="brands brands-sm brands-circle brands-inline">
                    	<li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========================
    	FOOTER - END 
    =========================== -->