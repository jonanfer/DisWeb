<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content=".5"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/metro-bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/metro-bootstrap-responsive.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css" type="text/css" media="screen" />
    <title>Document</title>
    <style>
        body{
            background: url(../public/imgs/home.png) center;
        }
        .content{
            width: 100%;
            max-width: 1000px;
            margin: 30px auto;
        }
        .span{
            text-transform: capitalize;
        }
        .panel{
            padding: 10px;
        }
        .panel-default
        {
            background-color: rgba(25,25,25,0.5);
        }  
        tr.primary{
            background-color: #999;
        }
        .slide
        {
            width: 100%;
            display: inline-block;
        }
        #mostrar1, #mostrar2, #mostrar3
        {
            width: 100%;
            margin-bottom: 10px;
        }

        .datos1, .datos2, .datos3
        {
            margin-bottom: 20px;
            padding: 5px;
            font: 18px Tahoma;
            color: white;
        }
    </style>
</head>
<body class="metro">
<div class="content">
    <!---->
    <div class="panel panel-default">
      <img src="../public/imgs/encabezado3.fw.png" alt="..." class="img-thumbnail">

<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <div type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </div>
      <a class="navbar-brand" href="<?php echo base_url(); ?>user">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>empleado/disweb">Disweb</a></li>
        <li><a href="<?php echo base_url(); ?>solicitud/emple">Solicitudes</a></li>
        <li><a href="<?php echo base_url(); ?>solicitud/empleDis">Diseños</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>login/close">Cerrar Sesion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<nav class="horizontal-menu">
    <ul>
        <li>
           <a class="navbar-brand" href="#">Bienvenid@: <span class="span">
           <?php echo $this->session->userdata('name'); ?></span></a>
        </li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>
           <a class="navbar-brand" href="#">Rol: <span class="span">
           <?php echo $this->session->userdata('rol'); ?></span></a>
        </li>
    </ul>
</nav>

<div class="principal">
<div class="slide">
<div class="slider-wrapper theme-default">
     <div id="slider" class="nivoSlider">
        <img src="../public/imgs/logo1.jpg" alt="" title="This is an example of a HTML caption with link" />
        <img src="../public/imgs/logo2.jpg" alt="" title="This is an example of a caption" />         
        <img src="../public/imgs/logo3.jpg" alt="" title="This is an example of a HTML caption with link" />          
        <img src="../public/imgs/logo4.jpg" alt="" title="This is an example of a caption" />
     </div>       
  </div>
</div>
</div>

<a class="button large danger" id="mostrar1">DisWeb</a>

 <div class="datos1">
    <h1>DisWeb</h1>
    <div>
        Hoy en día el diseño es visto con otros ojos, pero también es cierto 
        que es un servicio que no está al alcance de todas las personas por sus precios, 
        pero esta página web cambiara todo eso y brindara un gran apoyo a dichas personas 
        que antes no tenían un fácil acceso a este campo.
    </div>

    <a class="button mini danger" id="ocultar1">Ocultar Datos</a>
</div>

<a class="button large success" id="mostrar2">Misión</a>

 <div class="datos2">
    <h1>Misión</h1>
    <div>Lo que espera brindar el sistema es un servicio en donde se 
    puedan hacer diversas solicitudes que satisfagan las necesidades 
    requeridas por los clientes de tal manera que el servicio ofrecido 
    sea ameno a todo aquel que requiera su uso.</div>

    <a class="button mini success" id="ocultar2">Ocultar Datos</a>
</div>

<a class="button large primary" id="mostrar3">Visión</a>

 <div class="datos3">
    <h1>Visión</h1>
    <div>
     DisWeb se define como una manera de poder subir todo tipos de diseños a la web, 
     los cuales son solicitados a un tipo de diseñador según sea el caso y ejecutado por 
     el mismo para poder ser entregado a su cliente por medio de la web. Lo que el sistema 
     como tal no podrá hacer es realizar los diseños mediante el mismo sistema ya que por los 
     tipos de diseños que se manejan sería demasiado complicado realizarlos.
     Como principal beneficio se ve poder hacer que este sistema logre que haya un 
     mayor acceso a un diseñador ya que hoy en día no es tan común que las personas 
     usen esta opción de solicitar un diseño, ya sea para su casa o su negocio, finalmente 
     la meta de este sistema es abrirle las puertas a todo tipo de personas a un mundo el 
     cual es desconocido ya que no todos gozan de la oportunidad de poder tener acceso a 
     alguna mejora para su casa o su negocio.
    </div>

    <a class="button mini primary" id="ocultar3">Ocultar Datos</a>
</div>

       

</div>
</div>
    <script src="<?php echo base_url(); ?>public/js/metro-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro-bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider(); 
    });

    $(document).ready(function() {
        $('.datos1, .datos2, .datos3').hide();
        $('#mostrar1').click(function(event) {
            $('.datos1').show('slow');
            $('#mostrar1').hide('slow');
        });
        $('#ocultar1').click(function(event) {
            $('.datos1').hide('slow');
            $('#mostrar1').show('slow');
        });

        $('.datos1, .datos2, .datos3').hide();
        $('#mostrar2').click(function(event) {
            $('.datos2').show('slow');
            $('#mostrar2').hide('slow');
        });
        $('#ocultar2').click(function(event) {
            $('.datos2').hide('slow');
            $('#mostrar2').show('slow');
        });

        $('.datos1, .datos2, .datos3').hide();
        $('#mostrar3').click(function(event) {
            $('.datos3').show('slow');
            $('#mostrar3').hide('slow');
        });
        $('#ocultar3').click(function(event) {
            $('.datos3').hide('slow');
            $('#mostrar3').show('slow');
        });
    });
    </script>
</body>
</html>