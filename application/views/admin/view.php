<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="refresh" content=".5"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/metro-bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap-theme.min.css">
    s<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/metro-bootstrap-responsive.css">
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
		.panel-default{
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

      <img src="../../public/imgs/encabezado3.fw.png" alt="..." class="img-thumbnail">

 <nav class="horizontal-menu">
    <ul>
        <li>
           <a class="navbar-brand" href="#">Bienvenido: <span class="span">
           <?php echo $this->session->userdata('name'); ?></span></a>
        </li> 
        <li>&nbsp;</li>
       <li>
           <a class="navbar-brand" href="#">Rol: <span class="span">
           <?php echo $this->session->userdata('rol'); ?></span></a>
        </li>
        <li>&nbsp;</li>
        <li><a href="<?php echo base_url(); ?>login/close">Cerrar Sesion</a></li>
    </ul>
</nav>

	<!---->
	<h1>Consultar Usuario</h1>

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
		<a class="button large danger" href="<?php echo base_url(); ?>">Volver Atras</a>
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