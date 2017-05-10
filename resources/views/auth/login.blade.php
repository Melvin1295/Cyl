<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>observatorio | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/vendor/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/vendor/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/vendor/adminlte/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <link href="/css/styleFondo.css" rel="stylesheet" type="text/css" />

    <link href="/css/style-login.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page fondo">
    <div class="">
      
     
        


        <form action="/auth/login" method="post">
        {!! csrf_field() !!}
          


          <body>
<div class="col-md-4 col-md-offset-4">
   <div class="col-md-12 bodLogin">

        @if($errors->has())
         <div class="callout callout-danger">
            @foreach($errors->all() as $error)
                 <p> {{$error}}</p>
            @endforeach
            </div>
         @endif
       <div class="col-md-6 loginCab">
           <p class="titLogin">Login<sub class="subEmpresa">Postulante</sub></p>
       </div>
       <div class="col-md-6 imgLogin">
           <img src="/images/logo.png" width="80" />
       </div>
       <br />
       <p class="subtitLogin">Iniciar sesión en su cuenta</p>
       <br />
       
           <p class="subTitLogin">
             
           </p>
           <div class="input-group">
               <span class="input-group-addon transparent"><span class="glyphicon glyphicon-user"></span></span>
               <input type="email"  class="form-control left-border-none" placeholder="Email" name="email" value="{{old('email')}}" required />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
           </div><br>
           <div class="input-group">
               <span class="input-group-addon transparent"><span class="glyphicon glyphicon-lock"></span></span>
               <input type="password" placeholder="Password" name="password" class="form-control left-border-none"  required />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
           </div>
           <!-- Input oculto para identificar el formulario -->
           <br>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember"> Recordar
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar</button>
            </div><!-- /.col -->
          </div>  
  </body>
        </form>

        <!--<div class="social-auth-links text-center">
          <p>- O -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Iniciar sesión usando Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Iniciar sesión usando Google+</a>
        </div> --> <!-- /.social-auth-links -->

        
        <a href="/colaboradores/create" class="text-center">Registrar nuevo usuario</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="/vendor/adminlte/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/vendor/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="/vendor/adminlte/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>




   

</html>
