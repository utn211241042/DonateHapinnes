<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
		<link rel="stylesheet" href="{{asset('css/styles2.css')}}">
		<title>donate/happiness</title>
			<link rel="stylesheet" href="{{asset('css/styles.css')}}" />
			<link rel="icon" href="{{asset('img/logoProyecto.png')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('css/css2/main.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/css2/util.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
	</head>
	@include('layouts.header')
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/logoProyecto.png');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="{{route('registrar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
					<span class="login100-form-title p-b-49">
						Iniciar sesión 
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input1000" >Nombre</span>
						<input class="input100" type="text"  name="name" placeholder="Escribe tu nombre de la organización">
						<span class="focus-input100" data-symbol="&#xf206;" name="name" value="{{old('name')}}"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input1000" >Correo</span>
						<input class="input100" type="email" name="email" placeholder="Escribe tu nombre " required>
						<span class="focus-input100" data-symbol="&#xf206;"
						value="{{old('email')}}"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="password" minlength="10" maxlength="11" placeholder="Escribe tu contraseña" required>
						<span class="focus-input100" data-symbol="&#xf190;"  ></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input1000" >Dirección</span>
						<input class="input100" type="text" name="direccion" placeholder="Escribe tu nombre de la organización" required>
						<span class="focus-input100" data-symbol="&#xf206;" name="direccion" value="{{old('direccion')}}"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input1000" >Misión</span>
                        <textarea class="input100" type="text" name="mision" placeholder="Escribe misión de la organización" required></textarea>
						<span class="focus-input100" data-symbol="&#xf206;"  name="mision"
						value="{{old('mision')}}"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input1000" >Visión</span>
                        <textarea class="input100" type="text" name="vision" placeholder="Escribe misión de la organización" required></textarea>
						<span class="focus-input100" data-symbol="&#xf206;" name="vision"
						value="{{old('vision')}}"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input1000" >Descripción General </span>
                        <textarea class="input100" type="text" name="descripcion" placeholder="Escribe en general sobre tu organización" required></textarea>
						<span class="focus-input100" data-symbol="&#xf206;"name="descripcion" 
						value="{{old('descripcion')}}"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input1000" >Telefono</span>
						<input class="input100" type="tel"  min="10" max="10" name="telefono" placeholder="Escribe tu numero telefonico" required>
						<span class="focus-input100" data-symbol="&#xf206;"   name="telefono" 
						value="{{old('telefono')}}" ></span>
					</div>
					
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input1000" >Imagen</span>
						<input class="input100" type="file"  name="imagen" placeholder="Escribe tu nombre de la organización" required>
						<span class="focus-input100" data-symbol="&#xf206;"  name="imagen"
						value="{{old('imagen')}}"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input1000" >Documento validado o membretado</span>
						<input class="input100" type="file" name="documento"  required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Registrar
							</button>
						</div>
					</div>
					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							O Resgistrate 
						</span>

						<a href="#" class="txt2">
							resgitrar
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>