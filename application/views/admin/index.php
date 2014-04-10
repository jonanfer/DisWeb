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
		.panel-default, .tab-content, .nav-pills
		{
			background-color: rgba(25,25,25,0.5);
		}
		tr.primary{
			background-color: #999;
		}
		.menu2
		{
			width: 100%;
			display: inline-block;
		}
		.slide
		{
			width: 100%;
			display: inline-block;
		}
	</style>
</head>
<body class="metro">
<div class="content">
	<!---->
	<div class="panel panel-default">

      <img src="public/imgs/encabezado3.fw.png" alt="..." class="img-thumbnail">


 <nav class="horizontal-menu">
    <ul>
        <li>
           <a class="navbar-brand" href="#">Bienvenido: <span class="span">
           <?php echo $this->session->userdata('name'); ?></span></a>
        </li> 
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li><a href="<?php echo base_url(); ?>login/close">Cerrar Sesion</a></li>
    </ul>
    <br />
    <ul>
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

<div class="principal">

<div class="menu2">
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
</div>


	<!---->
	<h1>Lista de Usuarios</h1>
	<a href="<?php echo base_url(); ?>admin/add" class="button large success">Adicionar Usuario</a><br><br>

      
      <ul class="nav nav-pills">
        <li class="active"><a href="#tablaUsAdmin" data-toggle="tab">
           <i class="icon-earth"> Administrador</i></a></li>
        <li><a href="#tablaUsuario" data-toggle="tab">
        	<i class="icon-user"> Usuarios</i>
        </a></li>
        <li><a href="#tablaUsEmp" data-toggle="tab">
        	<i class="icon-stats"> Empleados</i>
        </a></li>
        <li><a href="#tablaUsDis" data-toggle="tab">
        	<i class="icon-console"> Diseñadores</i>
        </a></li>
      </ul>

       <div class="tab-content">
        <div class="tab-pane active" id="tablaUsAdmin">
       <table class="table">
           <thead>
           <tr>
               <th class="text-left">#</th>
               <th class="text-left">Documento</th>
               <th class="text-left">Nombre</th>
               <th class="text-left">Apellido</th>
               <th class="text-left">Telefono</th>
               <th class="text-left">Acciones</th>
           </tr>
           </thead>
           <tbody>
           <?php $cont = 1; ?>
		   <?php foreach ($admin as $row ): ?>
           <tr <?php if ($row->state_us == 'Inactivo') { echo 'class="danger"';} ?>>
              <td><?php echo $cont++; ?></td>
              <td class="right"><?php echo $row->document_us; ?></td>
              <td class="right"><?php echo $row->firstName_us; ?></td>
              <td class="right"><?php echo $row->lastName_us; ?></td>
              <td class="right"><?php echo $row->phone_us; ?></td>
              <td class="right">
                  <a href="<?php echo base_url(); ?>admin/lst/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small danger">
				  <i class="icon-search"></i></a>

				  <a href="<?php echo base_url(); ?>admin/upd/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small primary">
				  <i class="icon-pencil"></i></a>

				  <?php if ($row->state_us == "Activo"): ?>
				  <a href="<?php echo base_url(); ?>admin/updina/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small warning">
				  <i class="icon-key"></i></a>
				  <?php endif ?>

				  <?php if ($row->state_us == "Inactivo"): ?>
				  <a href="<?php echo base_url(); ?>admin/updhab/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small inverted">
				  <i class="icon-key-2"></i></a>
				  <?php endif ?>

				 <!--  <a onclick="borrar();" type="button" class="btn btn-xs btn-danger"  
				 data-toggle="tooltip" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a> -->
				  <button type="button" class="btn button small info btn-delete" data-id="<?php echo $row->id_us; ?>">
				  <i class="icon-box-remove"></i></button>
              </td>
           </tr>
		   <?php endforeach ?>
		   <tr>
			  <td colspan="6" class="text-center">
				 <?php echo $this->pagination->create_links(); ?>
			  </td>
		   </tr>
           </tbody>
           <tfoot></tfoot>
       </table>
       </div>

        <div class="tab-pane" id="tablaUsuario">
       <table class="table">
           <thead>
           <tr>
               <th class="text-left">#</th>
               <th class="text-left">Documento</th>
               <th class="text-left">Nombre</th>
               <th class="text-left">Apellido</th>
               <th class="text-left">Telefono</th>
               <th class="text-left">Acciones</th>
           </tr>
           </thead>
           <tbody>
           <?php $cont = 1; ?>
		   <?php foreach ($usu as $row ): ?>
           <tr <?php if ($row->state_us == 'Inactivo') { echo 'class="danger"';} ?>>
              <td><?php echo $cont++; ?></td>
              <td class="right"><?php echo $row->document_us; ?></td>
              <td class="right"><?php echo $row->firstName_us; ?></td>
              <td class="right"><?php echo $row->lastName_us; ?></td>
              <td class="right"><?php echo $row->phone_us; ?></td>
              <td class="right">
                  <a href="<?php echo base_url(); ?>admin/lst/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small danger">
				  <i class="icon-search"></i></a>

				  <a href="<?php echo base_url(); ?>admin/upd/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small primary">
				  <i class="icon-pencil"></i></a>

				  <?php if ($row->state_us == "Activo"): ?>
				  <a href="<?php echo base_url(); ?>admin/updina/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small warning">
				  <i class="icon-key"></i></a>
				  <?php endif ?>

				  <?php if ($row->state_us == "Inactivo"): ?>
				  <a href="<?php echo base_url(); ?>admin/updhab/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small inverted">
				  <i class="icon-key-2"></i></a>
				  <?php endif ?>

				 <!--  <a onclick="borrar();" type="button" class="btn btn-xs btn-danger"  
				 data-toggle="tooltip" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a> -->
				  <button type="button" class="btn button small info btn-delete" data-id="<?php echo $row->id_us; ?>">
				  <i class="icon-box-remove"></i></button>
              </td>
           </tr>
		   <?php endforeach ?>
		   <tr>
			  <td colspan="6" class="text-center">
				 <?php echo $this->pagination->create_links(); ?>
			  </td>
		   </tr>
           </tbody>
           <tfoot></tfoot>
       </table>
       </div>

        <div class="tab-pane" id="tablaUsEmp">
       <table class="table">
           <thead>
           <tr>
               <th class="text-left">#</th>
               <th class="text-left">Documento</th>
               <th class="text-left">Nombre</th>
               <th class="text-left">Apellido</th>
               <th class="text-left">Telefono</th>
               <th class="text-left">Acciones</th>
           </tr>
           </thead>
           <tbody>
           <?php $cont = 1; ?>
		   <?php foreach ($emple as $row ): ?>
           <tr <?php if ($row->state_us == 'Inactivo') { echo 'class="danger"';} ?>>
              <td><?php echo $cont++; ?></td>
              <td class="right"><?php echo $row->document_us; ?></td>
              <td class="right"><?php echo $row->firstName_us; ?></td>
              <td class="right"><?php echo $row->lastName_us; ?></td>
              <td class="right"><?php echo $row->phone_us; ?></td>
              <td class="right">
                  <a href="<?php echo base_url(); ?>admin/lst/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small danger">
				  <i class="icon-search"></i></a>

				  <a href="<?php echo base_url(); ?>admin/upd/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small primary">
				  <i class="icon-pencil"></i></a>

				  <?php if ($row->state_us == "Activo"): ?>
				  <a href="<?php echo base_url(); ?>admin/updina/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small warning">
				  <i class="icon-key"></i></a>
				  <?php endif ?>

				  <?php if ($row->state_us == "Inactivo"): ?>
				  <a href="<?php echo base_url(); ?>admin/updhab/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small inverted">
				  <i class="icon-key-2"></i></a>
				  <?php endif ?>

				 <!--  <a onclick="borrar();" type="button" class="btn btn-xs btn-danger"  
				 data-toggle="tooltip" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a> -->
				  <button type="button" class="btn button small info btn-delete" data-id="<?php echo $row->id_us; ?>">
				  <i class="icon-box-remove"></i></button>
              </td>
           </tr>
		   <?php endforeach ?>
		   <tr>
			  <td colspan="6" class="text-center">
				 <?php echo $this->pagination->create_links(); ?>
			  </td>
		   </tr>
           </tbody>
           <tfoot></tfoot>
       </table>
       </div>

       <div class="tab-pane" id="tablaUsDis">
       <table class="table">
           <thead>
           <tr>
               <th class="text-left">#</th>
               <th class="text-left">Documento</th>
               <th class="text-left">Nombre</th>
               <th class="text-left">Apellido</th>
               <th class="text-left">Telefono</th>
               <th class="text-left">Acciones</th>
           </tr>
           </thead>
           <tbody>
           <?php $cont = 1; ?>
		   <?php foreach ($dise as $row ): ?>
           <tr <?php if ($row->state_us == 'Inactivo') { echo 'class="danger"';} ?>>
              <td><?php echo $cont++; ?></td>
              <td class="right"><?php echo $row->document_us; ?></td>
              <td class="right"><?php echo $row->firstName_us; ?></td>
              <td class="right"><?php echo $row->lastName_us; ?></td>
              <td class="right"><?php echo $row->phone_us; ?></td>
              <td class="right">
                  <a href="<?php echo base_url(); ?>admin/lst/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small danger">
				  <i class="icon-search"></i></a>

				  <a href="<?php echo base_url(); ?>admin/upd/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small primary">
				  <i class="icon-pencil"></i></a>

				  <?php if ($row->state_us == "Activo"): ?>
				  <a href="<?php echo base_url(); ?>admin/updina/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small warning">
				  <i class="icon-key"></i></a>
				  <?php endif ?>

				  <?php if ($row->state_us == "Inactivo"): ?>
				  <a href="<?php echo base_url(); ?>admin/updhab/<?php echo $row->id_us; ?>" type="button" 
				  class="btn button small inverted">
				  <i class="icon-key-2"></i></a>
				  <?php endif ?>

				 <!--  <a onclick="borrar();" type="button" class="btn btn-xs btn-danger"  
				 data-toggle="tooltip" data-original-title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a> -->
				  <button type="button" class="btn button small info btn-delete" data-id="<?php echo $row->id_us; ?>">
				  <i class="icon-box-remove"></i></button>
              </td>
           </tr>
		   <?php endforeach ?>
		   <tr>
			  <td colspan="6" class="text-center">
				 <?php echo $this->pagination->create_links(); ?>
			  </td>
		   </tr>
           </tbody>
           <tfoot></tfoot>
       </table>
       </div>
       </div>
   
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
    </script>
<script>

	/*===================*/
	/*eliminar con javascript*/
	/*===================*/

	/*function borrar(){
		var res = confirm('Realmente quiere eliminar este usuario');

		if (res == true) {
			window.location.replace('<?php echo base_url(); ?>index.php/user/del/<?php echo $row->id_us; ?>');
		};
	}*/

	/*===================*/
	/*eliminar con jquery*/
	/*===================*/

	$(document).ready(function() {
		$(".btn").tooltip();

		$('table.table').on('click', '.btn-delete', function(event) {
			event.preventDefault();
			
			$res = confirm("Realmente desea eliminar este usuario");

			if ($res == true) {
				$id_us = $(this).attr('data-id');
				window.location.replace('<?php echo base_url(); ?>user/del/'+$id_us+'');
			}
		});
	});
</script>
</body>
</html>