<?php
include_once '../modelo/conexionuno.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$consulta = "SELECT * FROM metodo_pago";
$resultado = $conexion->prepare($consulta);
$resultado-> execute();
$metodos = $resultado->fetchAll(PDO::FETCH_ASSOC);

$consulta = "SELECT * FROM repartidor";
$resultado = $conexion->prepare($consulta);
$resultado-> execute();
$repartidor = $resultado->fetchAll(PDO::FETCH_ASSOC);

$consulta = "SELECT * FROM platos_populares";
$resultado = $conexion->prepare($consulta);
$resultado-> execute();
$platos = $resultado->fetchAll(PDO::FETCH_ASSOC);

$consulta = "SELECT * FROM bebidas";
$resultado = $conexion->prepare($consulta);
$resultado-> execute();
$bebidas = $resultado->fetchAll(PDO::FETCH_ASSOC);

$consulta = "SELECT * FROM postres";
$resultado = $conexion->prepare($consulta);
$resultado-> execute();
$postres = $resultado->fetchAll(PDO::FETCH_ASSOC);
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
                <a href="domicilio.php" class="nav_link active"> <i class="fa-solid fa-cart-shopping"></i> <span class="nav_name">Domicilio</span> </a> 
                <a href="pedidos.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Pedidos</span> </a> 
                <a href="contactos.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Contactos</span> </a>  </div>
            </div> <a href="login/index.html" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <br><br><br><center>
    <div id="domicilio" class="container-fluid">
    <div class="row">
    <h1><strong><em>Domicilios</em></strong></span></h1>
      <div class="col-6">
        <form name="f" action="domicilio.php" method="post">
          <label>Nombres *</label>
          <input type="text" name="nombre"  class="form-control" style="width: 65%" placeholder="Nombres"><br>
          <label>Apellidos *</label>
          <input type="text" name="apellidos"  class="form-control" style="width: 65%" placeholder="Apellidos"><br>
          <label>Telefono *</label>
          <input type="text" name="telefono"  class="form-control" style="width: 65%" placeholder="Telefono"><br>
          <label>Correo *</label>
          <input type="text" name="correo"  class="form-control" style="width: 65%" placeholder="Correo"><br>
          <label>Direccion *</label>
          <input type="text" name="direccion"  class="form-control" style="width: 65%" placeholder="Direccion"><br>
          <label>Id_Metodo_Pago *</label>
          <select name="pagos"  class="form-control" style="width: 65%">
          <option>---- Seleccione---</option>
          <?php
          foreach($metodos as $filtro){
            ?> 
            <option><?php echo $filtro['Id_Metodo_Pagos']?>. <?php echo $filtro['Nombre']?></option>
          <?php
          }
          ?>
          </select><br>
          <label>Id_Repartidor *</label>
          <select name="Id_Repartidor"  class="form-control" style="width: 65%">
          <option>---- Seleccione---</option>
          <?php
          foreach($repartidor as $filtro){
            ?> 
            <option><?php echo $filtro['Id_Repartidor']?>. <?php echo $filtro['Nombre']?></option>
          <?php
          }
          ?>
          </select><br>
        </div>
          <div class="col-6">
          <script>
            function cal(){
              try {
                var a = parseInt(document.f.precioplatos.value),
                s = parseInt(document.f.preciopostres.value);
                b = parseInt(document.f.preciobebidas.value);
                document.f.total.value = a+s+b; 
              }  catch (e){
                
               }
              }
              </script>
          <label>Id_Platos Populares *</label>
          <select name="platos"  class="form-control" style="width: 65%">
          <option>---- Seleccione---</option>
          <?php
          foreach($platos as $filtro){
            ?> 
            <option><?php echo $filtro['Id_Platos_Populares']?>. <?php echo $filtro['Nombre']?>   $<?php echo $filtro['Precio_Platos']?></option>
          <?php
          }
          ?>
          </select><br>
          <label>Precio_Platos *</label>
          <input type="number" id="precioplatos"  class="form-control" style="width: 65%" value="0" onchange="cal()" onkeyup="cal()"><br>
          <label>Id_Postres *</label>
          <select name="postres"  class="form-control" style="width: 65%">
          <option>---- Seleccione---</option>
          <?php
          foreach($postres as $filtro){
            ?> 
            <option><?php echo $filtro['Id_Postres']?>. <?php echo $filtro['Nombre']?>   $<?php echo $filtro['Precio_Postres']?></option>
          <?php
          }
          ?>
          </select><br>
          <label>Precio_Postres *</label>
          <input type="number" id="preciopostres"  class="form-control" style="width: 65%" value="0" onchange="cal()" onkeyup="cal()"><br>
          <label>Id_Bebidas *</label>
          <select name="bebidas"  class="form-control" style="width: 65%">
          <option>---- Seleccione---</option>
          <?php
          foreach($bebidas as $filtro){
            ?> 
            <option><?php echo $filtro['Id_Bebidas']?>. <?php echo $filtro['Nombre']?>   $<?php echo $filtro['Precio_Bebidas']?>
          </option>
          <?php
          }
          ?>
          </select><br>
          <label>Precio_Bebidas *</label>
          <input type="number" id="preciobebidas" class="form-control" style="width: 65%" value="0" onchange="cal()" onkeyup="cal()"><br>
          <label>Total *</label>
          <input type="number" id="total" class="form-control" style="width: 65%" readonly="readonly" onchange="cal()" onkeyup="cal()" disabled><br>
          <input type="submit" name="btn_guardar" class="btn btn-success" value="Enviar">
          <br>
          <br>
          <!---controlador guardar - insertar datos-->
          <?php
          include("../modelo/conexioncrud.php");
          if(isset($_POST['btn_guardar']))
          {
            $Nombres = $_POST['nombre'];
            $Apellidos = $_POST['apellidos'];
            $Telefono = $_POST['telefono'];
            $Correo = $_POST['correo'];
            $Direccion = $_POST['direccion'];
            $Id_Metodo_Pagos = $_POST['pagos'];
            $Id_Platos_Populares = $_POST['platos'];
            $Id_Postres = $_POST['postres'];
            $Id_Bebidas = $_POST['bebidas'];
            $Id_Repartidor = $_POST['Id_Repartidor'];
            if($Nombres=="" || $Apellidos=="" || $Telefono=="" || $Correo=="" || $Direccion=="" || $Id_Metodo_Pagos=="" || $Id_Platos_Populares=="" || $Id_Postres=="" || $Id_Bebidas=="" || $Id_Repartidor=="")
            {  
              echo"<script> alert('Todos los campos son obligatorios ')
              location.href ='domicilio.php';</script>";
            }
            else{
              $query = mysqli_query($conectar, "INSERT INTO domicilios (Nombres, Apellidos, Telefono, Correo, Direccion, Id_Metodo_Pagos, Id_Platos_Populares, Id_Postres, Id_Bebidas, Id_Repartidor) VALUES('$Nombres', '$Apellidos', '$Telefono', '$Correo', '$Direccion', '$Id_Metodo_Pagos', '$Id_Platos_Populares', '$Id_Postres', '$Id_Bebidas', '$Id_Repartidor')");
              if($query){
                echo "<script> alert('Compra Exitosa!!!')
                location.href = 'domicilio.php';</script>";
              }
            }
          }
          ?>
        </form>
          </div>
    </div>
  </div>
  </center>
  <br>
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