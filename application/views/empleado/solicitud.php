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
        body
        {
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
        .panel-default, .tab-content, .nav-pills
        {
            background-color: rgba(25,25,25,0.5);
        }
        tr.primary{
            background-color: #999;
        }
        .slide
        {
            width: 970px;
            display: inline-block;
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

<h1>Datos de Solicitud</h1>

      <ul class="nav nav-pills">
        <li class="active"><a href="#tablaDiseWeb" data-toggle="tab">Diseños Web</a></li>
        <li><a href="#tablaDiseGra" data-toggle="tab">Diseño Grafico</a></li>
        <li><a href="#tablaDiseInt" data-toggle="tab">Diseño de Interiores</a></li>
      </ul>

       <div class="tab-content">
        <div class="tab-pane active" id="tablaDiseWeb">
       <table class="table">
           <thead>
           <tr>
               <th class="text-left">#</th>
               <th class="text-left">Usuario</th>
               <th class="text-left">Tipo de Solicitud</th>
               <th class="text-left">Fecha de Solicitud</th>
               <th class="text-left">Estado</th>
               <th class="text-left">Acciones</th>
           </tr>
           </thead>
           <tbody>
           <?php $cont = 1; ?>
           <?php foreach ($lweb as $row ): ?>
            <?php if ($row->est_solicitud != "Aprobado"): ?>
           <tr>
              <td><?php echo $cont++; ?></td>
              <td class="right"><?php echo $row->usuario_id; ?></td>
              <td class="right"><?php echo $row->tip_solicitud; ?></td>
              <td class="right"><?php echo $row->fecha_solicitud; ?></td>
              <td class="right"><?php echo $row->est_solicitud; ?></td>
              <td class="right">
                    <a href="<?php echo base_url(); ?>solicitud/lstEmple/<?php echo $row->id_solicitud; ?>" type="button" 
                  class="btn button small danger">
                  <i class="icon-search"></i></a>

                  <?php if ($row->est_solicitud == "Pendiente"): ?>
                   <a href="<?php echo base_url(); ?>solicitud/estpen/<?php echo $row->id_solicitud; ?>" type="button" 
                   class="btn button small primary">
                   <i class="icon-checkbox-unchecked"></i></a>
                   <?php endif ?>
          
                   <?php if ($row->est_solicitud == "Aprobado"): ?>
                   <a href="<?php echo base_url(); ?>solicitud/estaprob/<?php echo $row->id_solicitud; ?>" type="button" 
                   class="btn button small warning">
                   <i class="icon-checkbox"></i></a>
                   <?php endif ?>
              </td>
           </tr>
           <?php endif ?>
           <?php endforeach ?>
           </tbody>
           <tfoot></tfoot>
       </table>
       </div>

        <div class="tab-pane" id="tablaDiseGra">
       <table class="table">
           <thead>
           <tr>
               <th class="text-left">#</th>
               <th class="text-left">Usuario</th>
               <th class="text-left">Tipo de Solicitud</th>
               <th class="text-left">Fecha de Solicitud</th>
               <th class="text-left">Estado</th>
               <th class="text-left">Acciones</th>
           </tr>
           </thead>
           <tbody>
           <?php $cont = 1; ?>
           <?php foreach ($lgra as $row ): ?>
            <?php if ($row->est_solicitud != "Aprobado"): ?>
           <tr>
              <td><?php echo $cont++; ?></td>
              <td class="right"><?php echo $row->usuario_id; ?></td>
              <td class="right"><?php echo $row->tip_solicitud; ?></td>
              <td class="right"><?php echo $row->fecha_solicitud; ?></td>
              <td class="right"><?php echo $row->est_solicitud; ?></td>
              <td class="right">
                    <a href="<?php echo base_url(); ?>solicitud/lstEmple/<?php echo $row->id_solicitud; ?>" type="button" 
                  class="btn button small danger">
                  <i class="icon-search"></i></a>

                  <?php if ($row->est_solicitud == "Pendiente"): ?>
                   <a href="<?php echo base_url(); ?>solicitud/estpen/<?php echo $row->id_solicitud; ?>" type="button" 
                   class="btn button small primary">
                   <i class="icon-checkbox-unchecked"></i></a>
                   <?php endif ?>
          
                   <?php if ($row->est_solicitud == "Aprobado"): ?>
                   <a href="<?php echo base_url(); ?>solicitud/estaprob/<?php echo $row->id_solicitud; ?>" type="button" 
                   class="btn button small warning">
                   <i class="icon-checkbox"></i></a>
                   <?php endif ?>
              </td>
           </tr>
           <?php endif ?>
           <?php endforeach ?>
           </tbody>
           <tfoot></tfoot>
       </table>
       </div>

        <div class="tab-pane" id="tablaDiseInt">
       <table class="table">
           <thead>
           <tr>
               <th class="text-left">#</th>
               <th class="text-left">Usuario</th>
               <th class="text-left">Tipo de Solicitud</th>
               <th class="text-left">Fecha de Solicitud</th>
               <th class="text-left">Estado</th>
               <th class="text-left">Acciones</th>
           </tr>
           </thead>
           <tbody>
           <?php $cont = 1; ?>
           <?php foreach ($lint as $row ): ?>
            <?php if ($row->est_solicitud != "Aprobado"): ?>
           <tr>
              <td><?php echo $cont++; ?></td>
              <td class="right"><?php echo $row->usuario_id; ?></td>
              <td class="right"><?php echo $row->tip_solicitud; ?></td>
              <td class="right"><?php echo $row->fecha_solicitud; ?></td>
              <td class="right"><?php echo $row->est_solicitud; ?></td>
              <td class="right">
                    <a href="<?php echo base_url(); ?>solicitud/lstEmple/<?php echo $row->id_solicitud; ?>" type="button" 
                  class="btn button small danger">
                  <i class="icon-search"></i></a>

                  <?php if ($row->est_solicitud == "Pendiente"): ?>
                   <a href="<?php echo base_url(); ?>solicitud/estpen/<?php echo $row->id_solicitud; ?>" type="button" 
                   class="btn button small primary">
                   <i class="icon-checkbox-unchecked"></i></a>
                   <?php endif ?>
          
                   <?php if ($row->est_solicitud == "Aprobado"): ?>
                   <a href="<?php echo base_url(); ?>solicitud/estaprob/<?php echo $row->id_solicitud; ?>" type="button" 
                   class="btn button small warning">
                   <i class="icon-checkbox"></i></a>
                   <?php endif ?>
              </td>
           </tr>
           <?php endif ?>
           <?php endforeach ?>
           </tbody>
           <tfoot></tfoot>
       </table>
       </div>
       </div>
   
</div>
</div>
    <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-widget.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro-bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider(); 
    });
    </script>
</body>
</html>