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
	</style>
</head>
<body class="metro">
<div class="content">
	<!---->
	<div class="panel panel-default">

      <img src="../public/imgs/encabezado3.fw.png" alt="..." class="img-thumbnail">

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

<?php echo validation_errors(); ?>

	<form method="post" id="commentForm">
       <fieldset>
           <legend><h1>Adicionar Usuario</h1></legend>
           <label>Documento</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Documento" id="document_us" name="document_us"
               value="<?php echo set_value('document_us'); ?>" required>
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Nombres</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Nombres" id="firstName_us" name="firstName_us"
               value="<?php echo set_value('firstName_us'); ?>" required>
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Apellidos</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Apellidos" id="lastName_us" name="lastName_us"
               value="<?php echo set_value('lastName_us'); ?>" required>
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Telefono</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Telefono" id="phone_us" name="phone_us"
               value="<?php echo set_value('phone_us'); ?>" required>
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Correo Electrónico</label>
           <div class="input-control text" data-role="input-control">
               <input type="email" placeholder="Ingresar Correo Electrónico" id="email_us" name="email_us"
               value="<?php echo set_value('email_us'); ?>" required>
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Usuario</label>
           <div class="input-control text" data-role="input-control">
               <input type="text" placeholder="Ingresar Usuario" id="user_us" name="user_us"
               value="<?php echo set_value('user_us'); ?>" required>
               <button class="btn-clear" tabindex="-1" type="button"></button>
           </div>
           <label>Contraseña</label>
           <div class="input-control password" data-role="input-control">
               <input type="password" placeholder="Ingresar Contraseña" autofocus="" id="password_us"
               value="<?php echo set_value('password_us'); ?>" name="password_us" required>
               <button class="btn-reveal" tabindex="-1" type="button"></button>
               <input type="hidden" id="state_us"  name="state_us" value="Activo">
           </div>
           <label>Rol</label>
           <div class="input-control select">
    			<select name="rol_us" id="rol_us" value="<?php echo set_value('rol_us'); ?>" required>
    			    <option value="">-- Seleccione -- </option>
		      		<option value="Administrador">Administrador</option>
		      		<option value="Diseñador">Diseñador</option>
		      		<option value="Empleado">Empleado</option>
		      		<option value="Usuario">Usuario</option>
    			</select>
		   </div>
           <input type="submit" value="Adicionar" class="large primary">
           <a href="<?php echo base_url(); ?>" class=" button large danger">Cancelar</a>
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