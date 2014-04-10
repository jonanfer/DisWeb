<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content=".5"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/metro-bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/metro-bootstrap-responsive.css">
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
        .panel-default, .tab-content, .nav-pills
        {
            background-color: rgba(25,25,25,0.5);
        }   
        tr.primary{
            background-color: #999;
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
        <li><a href="<?php echo base_url(); ?>solicitud">Solicitudes</a></li>
        <li><a href="<?php echo base_url(); ?>adelantos/DisAdel">Adelantos</a></li>
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
        <li>&nbsp;</li>
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

<a href="<?php echo base_url(); ?>solicitud/add" class="button large success">Adicionar Solicitud</a><br><br>

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
               <!--<th class="text-left">Usuario</th>-->
               <th class="text-left">Tipo de Solicitud</th>
               <th class="text-left">Fecha de Solicitud</th>
               <th class="text-left">Imagen</th>
               <th class="text-left">Descripción</th>
               <th class="text-left">Estado</th>
           </tr>
           </thead>
           <tbody>

           <?php foreach ($lweb as $row ): ?>
    <tr>
      <td><?php echo $row->id_solicitud; ?></td>
      <!--<td><?php //echo $row->usuario_id; ?></td>-->
      <td><?php echo $row->tip_solicitud; ?></td>
      <td><?php echo $row->fecha_solicitud; ?></td>
      <td><?php echo $row->ima_solicitud; ?></td>
      <td><?php echo $row->des_solicitud; ?></td>
      <td><?php echo $row->est_solicitud; ?></td>
    </tr>
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
               <!--<th class="text-left">Usuario</th>-->
               <th class="text-left">Tipo de Solicitud</th>
               <th class="text-left">Fecha de Solicitud</th>
               <th class="text-left">Imagen</th>
               <th class="text-left">Descripción</th>
               <th class="text-left">Estado</th>
           </tr>
           </thead>
           <tbody>

           <?php foreach ($lgra as $row ): ?>
    <tr>
      <td><?php echo $row->id_solicitud; ?></td>
      <!--<td><?php //echo $row->usuario_id; ?></td>-->
      <td><?php echo $row->tip_solicitud; ?></td>
      <td><?php echo $row->fecha_solicitud; ?></td>
      <td><?php echo $row->ima_solicitud; ?></td>
      <td><?php echo $row->des_solicitud; ?></td>
      <td><?php echo $row->est_solicitud; ?></td>
    </tr>
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
               <!--<th class="text-left">Usuario</th>-->
               <th class="text-left">Tipo de Solicitud</th>
               <th class="text-left">Fecha de Solicitud</th>
               <th class="text-left">Imagen</th>
               <th class="text-left">Descripción</th>
               <th class="text-left">Estado</th>
           </tr>
           </thead>
           <tbody>

           <?php foreach ($lint as $row ): ?>
    <tr>
      <td><?php echo $row->id_solicitud; ?></td>
      <!--<td><?php //echo $row->usuario_id; ?></td>-->
      <td><?php echo $row->tip_solicitud; ?></td>
      <td><?php echo $row->fecha_solicitud; ?></td>
      <td><?php echo $row->ima_solicitud; ?></td>
      <td><?php echo $row->des_solicitud; ?></td>
      <td><?php echo $row->est_solicitud; ?></td>
    </tr>
    <?php endforeach ?>
           </tbody>
           <tfoot></tfoot>
       </table>
       </div>
      </div>
   
</div>
</div>
    <script src="<?php echo base_url(); ?>public/js/metro-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro-bootstrap.min.js"></script>
</body>
</html>