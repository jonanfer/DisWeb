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
		.panel-default{
			background-color: rgba(25,25,25,0.5);
		}
		tr.primary{
			background-color: #999;
		}
		.menu
		{
			width: 220px;
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
      <a class="navbar-brand" href="<?php echo base_url(); ?>disenador">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>disenador/disweb">Disweb</a></li>
        <li><a href="<?php echo base_url(); ?>asignacion">Diseños</a></li>
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


		<form method="post">
		<?php foreach ($lu as $row): ?>
       <fieldset>
           <legend><h1>Modificar Diseñador</h1></legend>
           <label>Documento</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Documento" id="document_us" name="document_us"
               value="<?php echo $row->document_us; ?>" readonly="readonly">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Nombres</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Nombres" id="firstName_us" name="firstName_us"
               value="<?php echo $row->firstName_us; ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Apellidos</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Apellidos" id="lastName_us" name="lastName_us"
               value="<?php echo $row->lastName_us; ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Telefono</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Telefono" id="phone_us" name="phone_us"
               value="<?php echo $row->phone_us; ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Correo Electrónico</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Correo Electrónico" id="email_us" name="email_us"
               value="<?php echo $row->email_us; ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Usuario</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Usuario" id="user_us" name="user_us"
               value="<?php echo $row->user_us; ?>">
               <button class="btn-clear" tabindex="-1" type="button"></button>
               <input type="hidden" placeholder="Ingresar Contraseña" autofocus="" id="password_us"
               value="<?php echo $row->password_us; ?>" name="password_us">
           </div>
           <label>Estado</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" id="state_us" name="state_us"
               value="<?php echo $row->state_us; ?>" readonly="readonly">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Rol</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" id="rol_us" name="rol_us"
               value="<?php echo $row->rol_us; ?>" readonly="readonly">
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <input type="submit" value="Modificar" class="large primary">
           <a href="<?php echo base_url(); ?>" class=" button large danger">Cancelar</a>
           <?php endforeach ?>
       </fieldset>
   </form>
</div>
<script src="<?php echo base_url(); ?>public/js/metro-dropdown.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro-bootstrap.min.js"></script> 
</body>
</html>