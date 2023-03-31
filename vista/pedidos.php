<?php
include_once '../modelo/conexionuno.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$consulta = "SELECT * FROM domicilios";
$resultado = $conexion->prepare($consulta);
$resultado-> execute();
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);

$consulta = "SELECT * FROM repartidor";
$resultado = $conexion->prepare($consulta);
$resultado-> execute();
$respartidores = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<!Doctype html>
<html lang="es">
<head>
<link rel="shortcut icon" href="img/logo.png">
  <link href="../css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
  <script src="../js/rscript.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/31a11c3e1f.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		
		<!-- Poper Bootstrap --> 
	    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://lh3.googleusercontent.com/a/AGNmyxapCerw3uJFVn6KGhB9s4iKyGbMYnukU5hXtl5hc-8=s360" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
        <div> <a href="inicio.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">El Quetzal</span> </a>
                <div class="nav_list"> <a href="inicio.php" class="nav_link"> <i class="fa-solid fa-house-user"></i> <span class="nav_name">Inicio</span> </a> 
                <a href="menu.php" class="nav_link"> <i class="fa-solid fa-bowl-food"></i> <span class="nav_name"> Menu</span> </a> 
                <a href="domicilio.php" class="nav_link"> <i class="fa-solid fa-cart-shopping"></i> <span class="nav_name">Domicilio</span> </a> 
                <a href="pedidos.php" class="nav_link active"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Pedidos</span> </a> 
                <a href="contactos.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Contactos</span> </a>  </div>
            </div> <a href="login/index.html" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <br><br><br><center>
    <div id="domicilio" class="container-fluid">
    <div class="row">
    <h1><strong><em>Pedidos</em></strong></span></h1>
      <div class="col">
	<table class="table table-striped">
   <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
	   <th scope="col">Direccion</th>
     <th scope="col">Id_Metodo_Pago</th>
	   <th scope="col">Id_Platos Populares</th>
     <th scope="col">Id_Postres</th>
	   <th scope="col">Id_Bebidas</th>
     <th scope="col">Repartidor</th>
     <th scope="col">Estado</th>
     <th scope="col">Editar</th>
     <th scope="col">Eliminar</th>
	  
		
		
    </tr>
  </thead>
		
  <tbody>
  <?php
			foreach($usuarios as $filtro){
			?>
			<tr>
      <td><?php echo $filtro['Id']?></td>
				<td><?php echo $filtro['Nombres']?></td>
				<td><?php echo $filtro['Apellidos']?></td>
				<td><?php echo $filtro['Telefono']?></td>
				<td><?php echo $filtro['Correo']?></td>
				<td><?php echo $filtro['Direccion']?></td>
        <td><?php echo $filtro['Id_Metodo_Pagos']?></td>
				<td><?php echo $filtro['Id_Platos_Populares']?></td>
				<td><?php echo $filtro['Id_Postres']?></td>
        <td><?php echo $filtro['Id_Bebidas']?></td>
        <td><?php echo $filtro['Id_Repartidor']?><button type="button" class="btn btn-success repartidorbtn" data-bs-toggle="modal" data-bs-target="#repartidor"><i class="fa-solid fa-truck-fast"></i></button></td>
        <td>Entregado <input type="checkbox"></td>
        <td><button type="button" class="btn btn-success editbtn" data-bs-toggle="modal" data-bs-target="#editar"><i class="fa-solid fa-file-pen"></button></td>
        <td><button type="button" class="btn btn-danger deletebtn" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="fa-solid fa-trash-can"></i></i></button></td>
		
				</tr>
				<?php
			}
				?>
  </tbody>
</table>
	
	</div>
    </div>
    </div>
    <!--- Modal de editar --->
		<div class="modal fade" id="repartidor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualización de Pedidos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../controlador/editar.php" method="post">
				<input type="hidden" name="id" id="Id_Repartidor">
          <label>Repartidor *</label>
          <select name="repartidor_"  class="form-control" style="width: 65%">
          <option>---- Seleccione---</option>
          <?php
          foreach($respartidores as $filtro){
            ?> 
            <option><?php echo $filtro['Id_Repartidor']?>. <?php echo $filtro['Nombre']?>   <?php echo $filtro['Telefono']?></option>
          <?php
          }
          ?>
          </select>
          <br>
					<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Seleccionar</button>
      </div>
					</form>
      </div>
    
    </div>
  </div>



    <!--- Modal de editar --->
		<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualización de Pedidos</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../controlador/editar.php" method="post">
				<input type="hidden" name="id" id="update_id">
        
        <div class="form-group">
					<label for="">Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control">
					</div>

          <div class="form-group">
					<label for="">Apellidos</label>
					<input type="text" name="apellidos" id="apellidos" class="form-control">
					</div>

          <div class="form-group">
					<label for="">Telefono</label>
					<input type="text" name="telefono" id="telefono" class="form-control">
					</div>
					
          <div class="form-group">
					<label for="">Correo</label>
					<input type="text" name="correo" id="correo" class="form-control">
					</div>
          
          <div class="form-group">
					<label for="">Direccion</label>
					<input type="text" name="direccion" id="direccion" class="form-control">
					</div>

          <div class="form-group">
					<label for="">Id_Metodo_Pagos</label>
					<input type="text" name="pagos" id="pagos" class="form-control">
					</div>

          <div class="form-group">
					<label for="">Id_Platos_Populares</label>
					<input type="text" name="platos" id="platos" class="form-control">
					</div>

          <div class="form-group">
					<label for="">Id_Postres</label>
					<input type="text" name="postres" id="postres" class="form-control">
					</div>

          <div class="form-group">
					<label for="">Id_Bebidas</label>
					<input type="text" name="bebidas" id="bebidas" class="form-control">
					</div>
          
          <br>
					<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Actualizar</button>
      </div>
					</form>
      </div>
    
    </div>
  </div>
</div>

<!--- Modal de editar --->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Pedido Seleccionado</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<h4>Quieres Eliminar Pedido Seleccionado</h4>
		<form action="../controlador/eliminar.php" method="post">
			<input type="text" name="id" id="delete_id">
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
	</div>
	</form>
    </div>
  </div>
</div>
<script>
$('.repartidorbtn').on('click',function(){
	
	$tr=$(this).closest('tr');
	var datos=$tr.children("td").map(function(){
	 return $(this).text();
	});
	
	$('#Id_Repartidor').val(datos[0]);
	$('#repartidor_').val(datos[1]);
});

</script>

<script>
$('.editbtn').on('click',function(){
	
	$tr=$(this).closest('tr');
	var datos=$tr.children("td").map(function(){
	 return $(this).text();
	});
	
	$('#update_id').val(datos[0]);
	$('#nombre').val(datos[1]);
	$('#apellidos').val(datos[2]);
	$('#telefono').val(datos[3]);
	$('#correo').val(datos[4]);
	$('#direccion').val(datos[5]);
  $('#pagos').val(datos[6]);
  $('#platos').val(datos[7]);
  $('#postres').val(datos[8]);
  $('#bebidas').val(datos[9]);
});

</script>
<script>
$('.deletebtn').on('click',function(){
	
	$tr=$(this).closest('tr');
	var datos=$tr.children("td").map(function(){
	 return $(this).text();
	});
	$('#delete_id').val(datos['0']);
});

</script>

	<br><br><br><br></center>
<!--Footer-->

<footer>
  <div id="contactos" class="footer_main">

            <div class="footer_tag">
                <h2>Locacion</h2>
                <p>USA</p>
                <p>Colombia</p>
                <p>Japon</p>
                <p>Venezuela</p>
            </div>

            <div class="footer_tag">
                <h2>Enlace Rapido</h2>
                <p>Inicio</p>
                <p>Menu</p>
                <p>Domicilio</p>
            </div>

            <div class="footer_tag">
                <h2>Contacto</h2>
                <p>+57 312 3456 789</p>
                <p>+57 325 5568456</p>
                <p>juanita123@gmail.com</p>
                <p>mexicano123@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Nuestro servicio</h2>
                <p>entrega rapida</p>
                <p>Pagos Faciles</p>
                <p>24 x 7 Servicio</p>
            </div>

            <div class="footer_tag">
                <h2>Follows</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

    </footer>
</body>
</html>
