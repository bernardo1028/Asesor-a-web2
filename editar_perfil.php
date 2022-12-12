<?php 
session_start();
require('controlador/funciones.php');
require('clases/clases.php');
verificar_session();

	
	$usuario = usuarios::usuario_por_codigo($_SESSION['CodUsua']);


	if(isset($_POST['editar']))
	{
		$destino = 'subidos/';
		$foto_perfil = !empty($_FILES) ? $destino . $_FILES['foto']['name'] : $usuario[0]['foto_perfil'];
		$tmp = $_FILES['foto']['tmp_name'];
		$datos = array(
				$_POST['nombre'],
				$_POST['usuario'],
				$_POST['profesion'],
				$_POST['correo'],
				$_POST['foto_perfil']
			);
			

		if(strpos($datos[1], " ")  == false)
		{
			usuarios::editar($_SESSION['CodUsua'], $datos);
			//move_uploaded_file($tmp, $foto_perfil);
			//header('location: editar_perfil.php');
		}
	}

 ?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Editar Perfil</title>
 	<link rel="stylesheet" href="css/regis.css">
 </head>
 <body>
 <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="img/leer.png" class="brand_logo" alt="Logo">
                </div>
            </div>
           <form action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" autocomplete="off" method="post">
		   <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="nombre" class="form-control input_user" value="<?php echo $usuario[0]["nombre"]; ?>">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="usuario" class="form-control input_user" value="<?php echo $usuario[0]["usuario"]; ?>">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="profesion" class="form-control input_user" value="<?php echo $usuario[0]["profesion"]; ?>">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="correo" class="form-control input_user" value="<?php echo $usuario[0]["correo"]; ?>">
						</div>
 			
 			
 			

 			<input type="file" name="foto" >
			 <div class="d-flex justify-content-center mt-3 login_container">
                     <input type="submit" value="editar" name="editar" class="btn login_btn" >
				   </div>
 		</form>
 		<div class="registrar">
 			<a href="perfil.php?CodUsua=<?php echo $_SESSION['CodUsua']; ?>">Volver al perfil</a>
 		</div>
    
        
        </div>
    </div>
</div>

 		

 </body>
 </html>