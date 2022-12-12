<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/enla.css">
<div class="subir">
	<div class="publi-info-perfil">
		<table>
			<tr>
				<td><a href="#"><img src="<?php echo $_SESSION['foto_perfil']; ?>" alt="" class="publi-img-perfil"></a></td>
				<td><a href="#" class="nombre-usuario"><?php echo $_SESSION['nombre']; ?></a></td>
			</tr>
		</table>
		</div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
			<input type="text" name="contenido" id="contenido" placeholder="Contenido de la foto">
			<label for="archivo" class="boton-subir icon-camera"><img src="img/1.png" height ="30" width="30" aling = "center"></label>
			<input type="file" name="archivo" id="archivo" style="display: none">
			<input type="hidden" name="publicar">
		</form>
	</div>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
	<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <ul class="social-icons-ql">
   <li><a href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a></li>
   <li><a href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a></li>
   <li><a href="https://mx.linkedin.com/?src=go-pa&trk=sem-ga_campid.19001150288_asid.143806640876_crid.636777052015_kw.linkedin_d.c_tid.kwd-148086543_n.g_mt.e_geo.1010095&mcid=7000592715335761922&cid=&gclid=EAIaIQobChMI8cLB-_jy-wIVNx-tBh11dQ-2EAAYASAAEgIyuvD_BwE&gclsrc=aw.ds"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="https://accounts.google.com/v3/signin/identifier?dsh=S-737195258%3A1670809172437875&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&rip=1&sacu=1&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AeAAQh5z6B-d8Ba2LidSUjHW0373RVKJ_CDKHyK3vJgf6lUwlXj_VaFzCahK_vhG_FXP4vtCUI6GXw"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="https://www.pinterest.es/otakuang/dise%C3%B1o-web/"><i class="fa fa-pinterest"></i></a></li>
     <li><a href="https://www.reddit.com/"><i class="fa fa-reddit"></i></a></li>
     <li><a href="https://www.udemy.com/"><i class="fa fa-stumbleupon"></i></a></li>
   
   </ul>
   </div>
  
	</div>
</div>

