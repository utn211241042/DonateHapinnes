<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>donate/happiness</title>
		<link rel="stylesheet" href="{{asset('css/styles.css')}}" />
        <link rel="stylesheet" href="{{asset('css/estilos.css')}}" />
		
		<link rel="stylesheet" href="{{asset('css/conocenos.css')}}">
		<link rel="icon" href="{{asset('img/logoProyecto.png')}}">
	</head>
	<body>
		@include('layouts.header')
    
    <div class="contenedor-acordeon">
        <h2>Preguntas frecuentes</h2>
        <div class="acordeon">
            <input type="radio" name="acordeon" id="btn-acordeon1" class="btn-acordeon">
            <label for="btn-acordeon1">
                ¿Cómo puedo hacer una donación a una organización benéfica a través de este sitio web?

            </label>
            <div class="contenido-acordeon">
        <p>ingresando</p>
            </div>
        </div>
        <div class="acordeon">
         <input type="radio" name="acordeon" id="btn-acordeon2" class="btn-acordeon">
         <label for="btn-acordeon2">
            ¿Es seguro realizar donaciones en línea a través de su plataforma?

         </label>
         <div class="contenido-acordeon">
             <p>SI</p>
         </div>
     </div>
     <div class="acordeon">
         <input type="radio" name="acordeon" id="btn-acordeon3" class="btn-acordeon">
         <label for="btn-acordeon3">
            ¿Puedo donar de forma anónima?

         </label>
         <div class="contenido-acordeon">
             <p>SI</p>
         </div>
     </div>
     <div class="acordeon">
         <input type="radio" name="acordeon" id="btn-acordeon4" class="btn-acordeon">
         <label for="btn-acordeon4">
            ¿Recibiré un recibo de mi donación para fines fiscales?

         </label>
         <div class="contenido-acordeon">
             <p>NO</p>
         </div>
     </div>
    </div>
    <br>
    <br>
	@include('layouts.footer')

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
		<script src="script.js"></script>
	</body>
</html>
