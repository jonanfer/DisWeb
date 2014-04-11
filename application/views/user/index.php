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
            background: url(public/imgs/home.png) center;
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
        #mostrar
        {
            width: 100%;
        }
    </style>
</head>
<body class="metro">
<div class="content">
    <!---->
    <div class="panel panel-default">
      <img src="public/imgs/encabezado3.fw.png" alt="..." class="img-thumbnail">

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
        <li><a href="<?php echo base_url(); ?>user/disweb">Disweb</a></li>
        <li><a href="<?php echo base_url(); ?>user/solicitud">Solicitudes</a></li>
        <li><a href="<?php echo base_url(); ?>user/DisAdel">Adelantos</a></li>
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
        <img src="public/imgs/logo1.jpg" alt="" title="This is an example of a HTML caption with link" />
        <img src="public/imgs/logo2.jpg" alt="" title="This is an example of a caption" />         
        <img src="public/imgs/logo3.jpg" alt="" title="This is an example of a HTML caption with link" />          
        <img src="public/imgs/logo4.jpg" alt="" title="This is an example of a caption" />
     </div>       
  </div>
</div>
</div>

<a class="button large danger" id="mostrar">Mostrar Datos</a>

 <div class="datos">
    <h1>Datos de Usuario</h1>
    
    <table class="table">
    <tr class="primary">
      <th class="text-left" colspan="2">Datos de Usuario</th>
    </tr>
    <?php foreach ($lu as $row ): ?>
    <tr>
      <th class="text-left">Documento</th>
      <td><?php echo $row->document_us; ?></td>
    </tr>
    <tr>
      <th class="text-left">Nombre</th>
      <td><?php echo $row->firstName_us; ?></td>
    </tr>
    <tr>
      <th class="text-left">Apellido</th>
      <td><?php echo $row->lastName_us; ?></td>
    </tr>
    <tr>
      <th class="text-left">Telefono</th>
      <td><?php echo $row->phone_us; ?></td>
    </tr>
    <tr>
      <th class="text-left">Correo Electronico</th>
      <td><?php echo $row->email_us; ?></td>
    </tr>
    <tr>
      <th class="text-left">Usuario</th>
      <td><?php echo $row->user_us; ?></td>
    </tr>
    <tr>
      <th class="text-left">Rol</th>
      <td><?php echo $row->rol_us; ?></td>
    </tr>
    <?php endforeach ?>
    <tfoot></tfoot>
    </table>

    <a class="button large danger" href="<?php echo base_url(); ?>user/updUs"><i class="icon-pencil"></i> Modificar</a>
    <a class="button large success" id="ocultar">Ocultar Datos</a>
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
        $('.datos').hide();
        $('#mostrar').click(function(event) {
            $('.datos').show('slow');
            $('#mostrar').hide('slow');
        });
        $('#ocultar').click(function(event) {
            $('.datos').hide('slow');
            $('#mostrar').show('slow');
        });
    });
    </script>
</body>
</html>