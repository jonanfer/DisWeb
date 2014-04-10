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

<?php echo validation_errors(); ?>

<form method="post" class="formulario" id="commentForm" action="">
       <fieldset>
           <legend><h1>Asignación de Diseño</h1></legend>
           <label>Tipo de Solicitud</label>
          <div class="input-control text" data-role="input-control">
                <input type="text" id="solicitud_id" name="solicitud_id"
               value="<?php echo $asigna;?>" readonly="readonly" required>
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <div class="input-control select">
          <select name="dise_id" id="dise_id" required>
              <option value="">-- Seleccione -- </option>
              <?php foreach ($lstd as $row): ?>
              <option value="<?php echo $row->document_us;?>"><?php echo $row->firstName_us; echo " "; echo $row->lastName_us;?></option>
            <?php endforeach ?>
          </select>
          <input type="hidden" id="est_asigna"  name="est_asigna" value="Asignado">
          </div>
           <input type="submit" value="Asignar" class="large primary" name="asignar">
           <a href="<?php echo base_url(); ?>solicitud" class=" button large danger">Cancelar</a>
       </fieldset>
   </form>
   

</div>
</div>
<script src="<?php echo base_url(); ?>public/js/jquery-2.1.0.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/metro.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/metro-bootstrap.min.js"></script>
<script>
    $.validator.setDefaults({
      submitHandler: function() { alert("submitted!"); }
    });
    
    $().ready(function() {
      // validate the comment form when it is submitted
    $("#commentForm").validate();
</script>
</body>
</html>