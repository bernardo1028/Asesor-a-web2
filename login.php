
<?php 
session_start();
require('controlador/funciones.php');
require('clases/clases.php');


	if(isset($_POST['acceder']))
	{
		$pass = hash('sha512', $_POST['pass']);
		$datos = array(limpiar($_POST['usuario']), $pass);
		if(datos_vacios($datos) == false)
		{
			if(strpos($datos[0], " ") == false)
			{
				$resultados = usuarios::verificar($datos[0]);
				if(empty($resultados) == false)
				{
					if($datos[1] == $resultados[0]["pass"])
					{
						$_SESSION['CodUsua'] = $resultados[0]["CodUsua"];
						$_SESSION['nombre'] = $resultados[0]["nombre"];
						$_SESSION['foto_perfil'] = $resultados[0]['foto_perfil'];
						header('location: index.php');
					}
				}
			}
		}
	}

 ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head 	
meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/login.css">
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
                        <input type="text" name="usuario" class="form-control input_user" value="" placeholder="Usuario">
                    </div>
                    
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="pass" class="form-control input_pass" value="" placeholder="password">
                    </div>
                   

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                        </div>
                    </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                        <input type="submit" value="Acceder" name="acceder" class="btn login_btn">
                
               </div>
                </form>
            </div>
    
            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    <a href="registro.php">Eres nuevo?</a>
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