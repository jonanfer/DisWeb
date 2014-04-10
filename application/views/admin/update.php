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


		<form method="post">
		<?php foreach ($lu as $row): ?>
       <fieldset>
           <legend><h1>Modificar Usuario</h1></legend>
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
           <div class="input-control select">
    			<select name="state_us" id="state_us">
    			    <option value="">-- Seleccione -- </option>
		      		<option value="Activo" <?php if ($row->state_us == 'Activo') { echo "selected='selected'";} ?>>Activo</option>
		    	    <option value="Inactivo" <?php if ($row->state_us == 'Inactivo') { echo "selected='selected'";} ?>>Inactivo</option>
    			</select>
		   </div>
           <label>Rol</label>
           <div class="input-control select">
    			<select name="rol_us" id="rol_us">
    			    <option value="">-- Seleccione -- </option>
		      		<option value="Administrador" <?php if ($row->rol_us == 'Administrador') { echo "selected='selected'";} ?>>Administrador</option>
		      		<option value="Diseñador" <?php if ($row->rol_us == 'Diseñador') { echo "selected='selected'";} ?>>Diseñador</option>
		      		<option value="Empleado" <?php if ($row->rol_us == 'Empleado') { echo "selected='selected'";} ?>>Empleado</option>
		      		<option value="Usuario" <?php if ($row->rol_us == 'Usuario') { echo "selected='selected'";} ?>>Usuario</option>
    			</select>
		   </div>
           <input type="submit" value="Modificar" class="large primary">
           <a href="<?php echo base_url(); ?>" class=" button large danger">Cancelar</a>
           <?php endforeach ?>
       </fieldset>
   </form>
	</div>
</div>
<script src="<?php echo base_url(); ?>public/js/metro-dropdown.js"></script>
	<script src="<?php echo base_url(); ?>public/js/jquery-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/metro-bootstrap.min.js"></script> 
</body>
</html>