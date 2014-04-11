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
            background: url(../../public/imgs/home.png) center;
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
            width: 970px;
            display: inline-block;
        }
    </style>
</head>
<body class="metro">
<div class="content">
    <!---->
    <div class="panel panel-default">
      <img src="../../public/imgs/encabezado3.fw.png" alt="..." class="img-thumbnail">

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
        <li><a href="<?php echo base_url(); ?>disenador/disweb">Disweb</a></li>
        <li><a href="<?php echo base_url(); ?>disenador/disenos">Diseños</a></li>
        <li><a href="<?php echo base_url(); ?>adelantos">Adelantos</a></li>
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

<?php echo validation_errors(); ?>

<form method="post" class="formulario" action="" enctype="multipart/form-data">
       <fieldset>
           <legend><h1>Adelantos</h1></legend>
           <label>Fecha Adelanto</label>
           <div class="input-control text" data-role="input-control">
               <input type="date" placeholder="Ingresar Fecha" id="fecha_adelanto" name="fecha_adelanto"
               value="<?php echo set_value('fecha_adelanto'); ?>">
           </div>
           <label>Imagen</label>
           <div class="input-control text" data-role="input-control">
               <input type="file" id="ima_adelanto" name="ima_adelanto"
               value="<?php echo set_value('ima_adelanto'); ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Descripción</label>
           <div class="input-control textarea">
               <textarea name="des_adelanto" id="des_adelanto" cols="110" rows="10"
               value="<?php echo set_value('des_adelanto'); ?>" placeholder="Ingresar Descripción"></textarea>
           </div>
           <label>Id Diseñador</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" id="dise_id" name="dise_id"
               value="<?php echo $this->session->userdata('idUser'); ?>" readonly="readonly">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Id Asignación</label>
           <div class="input-control text" data-role="input-control">
                <input type="text" id="asigna_id" name="asigna_id"
               value="<?php echo $id_adel;?>" readonly="readonly">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>

           <input type="submit" value="Asignar" class="large primary" name="asignar">
           <a href="<?php echo base_url(); ?>solicitud" class=" button large danger">Cancelar</a>
       </fieldset>
   </form>
   

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
    </script>
</body>
</html>