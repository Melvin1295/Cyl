<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cyl | @section('module')Dashboard @show</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/vendor/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="/vendor/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/vendor/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/vendor/adminlte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE fonts OpenSans-->
    <link href="/css/fonts.css" rel="stylesheet" type="text/css" />
  <link href="/css/styleFondo.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/vendor/ngprogress/ngProgress.css">

    <link href="/vendor/jquery-ui/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />

      <script src="/js/canvasjs.min.js"></script>

     <!-- <link href="/vendor/angular-bootstrap/ui-bootstrap-csp.css" rel="stylesheet" type="text/css" /> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @section('base_url')
    @show
    @section('css-customize')
    @show



  

      
      
      </aside>



                    <!-- Content Wrapper. Contains page content -->
      <div >
            @yield('content')
        <head>
  <script type="text/javascript">
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        title: {
          text: "Años de Experiencia"
        },
        data: [{
          type: "column",
          dataPoints: [
            { y: 2, label: "Ninguna" },
            { y: 31, label: "1 Año" },
            { y: 52, label: "2 AÑos" },
            { y: 10, label: "5 Años" },
            { y: 46, label: "10 Años" },
            { y: 10, label: "MAs de 10 Años" },
          ]
        }]
      });
      chart.render();

      var chart = new CanvasJS.Chart("chartContainer1", {
        title: {
          text: "Edad"
        },
        data: [{
          type: "column",
          dataPoints: [
            { y: 45, label: "18 - 25" },
            { y: 31, label: "25 - 30" },
            { y: 52, label: "30 - 35" },
            { y: 10, label: "35 - 45" },
            { y: 46, label: "Mas de 45" },
          ]
        }]
      });
      chart.render();
      var chart = new CanvasJS.Chart("chartContainer2", {
        title: {
          text: "Ciudad"
        },
        data: [{
          type: "column",
          dataPoints: [
            { y: 45, label: "En la Ciudad" },
            { y: 31, label: "Fuera de la Ciudad" },
          ]
        }]
      });
      chart.render();
    }


  </script>
  
  <title>CanvasJS Example</title>
</head>
<style type="text/css">
   .postu li{
      list-style: none;
      text-decoration: none;
      font-style: none;
   }
   .postu li {
      
  margin-left: -40px;
  padding: 5px;
  border-radius: 5px;
  margin-bottom: 2px;

   }
   .li1{
       background-color: rgb(54, 158, 173);
   }
   .li2{
       background-color: rgb(194, 70, 66);
   }
   .li3{
       background-color: rgb(127, 96, 132);
   }
   .li4{
       background-color: rgb(134, 180, 2);
   }
   .li5{
       background-color: rgb(162, 209, 207);
   }
   .li6{
       background-color: rgb(200, 182, 49);
   }
</style>
<body>
  <div class="row">
      <div class="col-md-1">
        
      </div>
      <div class="col-md-7" style="margin-left:0%;">
        <div id="chartContainer" style="height: 300px; width: 100%;  "></div>
      </div>
      <div class="col-md-3">
         <div class="panel  panel-primary">
                        <!-- Default panel contents -->

                        <div class="panel-heading">En nivel de experiencias usted esta en ?</div>
                        <div class="panel-body">
                               <ul class="postu">
                                  <li class="li1">80 % de postulante que tienen Ninguna Experiencia, Mientras</li>
                                  <li class="li2">10% de postulantes 1 Año</li>
                                  <li class="li3">2% de postulantes 2 Años</li>
                                  <li class="li4">5% de postulantes Años</li>
                                  <li class="li5">3% de postulantes 10 Años</li>
                                  <li class="li6">0% de postulantes Mas de 10 Años</li>
                               </ul>
                        </div>
        </div>
      </div>
  </div>
  <hr>
   <div class="row">
      <div class="col-md-1">
        
      </div>
      <div class="col-md-7" style="margin-left:0%;">
        <div id="chartContainer1" style="height: 300px; width: 100%;  "></div>
      </div>
      <div class="col-md-3">
          <div class="panel  panel-primary">
                        <!-- Default panel contents -->

                        <div class="panel-heading">En edad usted esta en ?</div>
                        <div class="panel-body">
                               <ul class="postu">
                                  <li class="li1">80 % de postulante tienen entre 18 y 25 años</li>
                                  <li class="li2">10% de postulantes tienen entre 25 y 30 años</li>
                                  <li class="li3">10% de postulantes tienen entre 30 y 35 años</li>
                                  <li class="li4">10% de postulantes tienen entre 35 y 45 años</li>
                                  <li class="li5">3% de postulantes que tienen mas de 45 años</li>
                               </ul>
                        </div>
        </div>
      </div>
  </div>
  <hr>
   <div class="row" >
      <div class="col-md-1">
        
      </div>
      <div class="col-md-7" style="margin-left:0%;">
        <div id="chartContainer2" style="height: 300px; width: 100%;  "></div>
      </div>
      <div class="col-md-3">
          <div class="panel  panel-primary">
                        <!-- Default panel contents -->

                        <div class="panel-heading">En Ubicacion</div>
                        <div class="panel-body">
                               <ul class="postu">
                                  <li class="li1">80 % de postulante son de la Ciudad</li>
                                  <li class="li2">10% de postulantes no estan ubicados en la ciudad</li>
                               </ul>
                        </div>
        </div>
      </div>
  </div>
</body>

        
  <!-- END Content Wrapper. Contains page content -->


      </div>

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="/vendor/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/vendor/jquery-ui/ui/minified/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script type="text/javascript">
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/vendor/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Slimscroll -->
    <script src="/vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="/vendor/adminlte/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="/vendor/adminlte/dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="/vendor/adminlte/dist/js/demo.js" type="text/javascript"></script>

    <!--  <script src="/dev2/socket.io/socket.io.js"></script> -->
  <!-- bower:js -->
  <script src="/vendor/angular/angular.js"></script>
  <script src="/vendor/moment/moment.js"></script>
  <script src="/vendor/angular-route/angular-route.js"></script>
  <script src="/vendor/angular-sanitize/angular-sanitize.js"></script>
  <script src="/vendor/angular-ui-router/release/angular-ui-router.js"></script>
  <script src="/vendor/angular-socket-io/socket.js"></script>
    <script src="/vendor/ng-phpdebugbar/ng-phpdebugbar.js"></script>
    <script src="/vendor/angucomplete/angucomplete.js"></script>
    <script src="/vendor/angular-bootstrap/ui-bootstrap-tpls.js"></script>
    <script src="/vendor/ngprogress/build/ngprogress.min.js"></script>
  <!-- endbower -->
  <!-- inject:js -->
    <script src="/js/app/routes.js"></script>
    <script src="/js/app/servicesglobal.js"></script>

    <script src="/js/app/stores/app.js"></script>
    <script src="/js/app/stores/controllers.js"></script>
    <script src="/vendor/angular-ui-slider/src/slider.js"></script>
    <!-- endinject -->
    @section('js-customize')
    @show
<script>

$(document).ready(function(){
    $("body").on("click", '#myTabs2',function(e){
        //alert("The paragraph was clicked.");
        e.preventDefault()
                          $(this).tab('show')
    });
});
</script>

  </body>
</html>
