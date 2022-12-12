<?php 

require('controlador/funciones.php');
require('clases/clases.php');


$error = "";
if(isset($_POST['registrar']))
{
	$pass = hash('sha512', $_POST['pass']);
	
	$datos= array(
			$_POST['nombre'],
			$_POST['usuario'],
            $_POST['correo'],
			$pass,
			$_POST['profe'],
			$_POST['edad']

		);
	
	if(datos_vacios($datos) == false)
	{
		if(!strpos($datos[1], " "))
		{
			if(empty(usuarios::verificar($datos[1])))
			{
				usuarios::registrar($datos);
			}
			else{
				$error .= "usuario existe";
			}
		}
		else
		{
			$error .= "usuario con espacios";
		}
	}else{
		$error .= "Hay campos vacios";
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
	<title>Registro</title>
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
				<div class="d-flex justify-content-center form_container">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="nombre" class="form-control input_user" value="" placeholder="Nombre">
						</div>
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="usuario" class="form-control input_user" value="" placeholder="Usuario">
						</div>
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="correo" class="form-control input_user" value="" placeholder="Correo">
						</div>
                        
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="pass" class="form-control input_pass" value="" placeholder="password">
						</div>
                        <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="profe" class="form-control input_user" value="" placeholder="Profesion">
						</div>
                        <p id="edad">Edad</p> <select name="edad" id="">
                            <?php for($c = 1; $c <= 100; $c++): ?>
                                <option><?php echo $c ?></option>
                            <?php endfor; ?>
                    
                        </select>

						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
                     <input type="submit" value="Registrar" name="registrar" class="btn login_btn" >
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<?php if(!empty($error)): ?>
			         <p class="error"><?php echo $error ?></p>
					</div>
					<?php endif; ?>
		           <div class="registrar">
			       <a href="login.php">Tienes cuenta?</a>
		           </div>
				</div>
			</div>
		</div>
	</div>
          
            </div>
        </div>
    </div>
</div>
</body>
</html>