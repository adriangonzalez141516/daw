<form class="login-form">
	<img class="centrar" id="logo" src="https://w7.pngwing.com/pngs/735/182/png-transparent-film-cinema-logo-graphy-others-angle-text-photography.png">
		<p class="login-text">
	    Inicia Sesion
		</p>
  	<input type="text" name="nombre" class="input-text" autofocus="true" required="true" placeholder="Usuario"  value="<?=(isset($_REQUEST['nombre']))?$_REQUEST['nombre']:''?>" />
  	<input type="password" name="contraseña" class="input-text" required="true" placeholder="Password" value="<?=(isset($_REQUEST['contraseña']))?$_REQUEST['contraseña']:''?>" />
  	<input type="submit" name="orden" value="Entrar" class="login-submit" />
</form>

		