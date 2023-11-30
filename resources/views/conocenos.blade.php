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
		
		<link rel="stylesheet" href="{{asset('css/conocenos.css')}}">
		<link rel="icon" href="{{asset('img/logoProyecto.png')}}">
	</head>
	<body>
		@include('layouts.header')
    <br>

	<div class="title-cards">
		<h2>Conocenos</h2>
	</div>
<div class="container-card">
	
<div class="card">
	<figure>
		<img src="https://iepvirgendecopacabana.com/wp-content/uploads/2020/10/mision.png"width="40" height="30" />
	</figure>
	<div class="contenido-card">
		<h3>Misión</h3>
		<p>Nuestra misión es conectar a personas generosas con organizaciones benéficas en todo el mundo, facilitando donaciones seguras y eficientes para causas que marcan la diferencia en la vida de las personas. Buscamos impulsar el impacto positivo en la sociedad al simplificar el proceso de dar y proporcionar a las organizaciones sin fines de lucro los recursos que necesitan para lograr sus objetivos.</p>
		
	</div>
</div>
<div class="card">
	<figure>
		<img src="https://iepvirgendecopacabana.com/wp-content/uploads/2020/10/logo-vision.png">
	</figure>
	<div class="contenido-card">
		<h3>Visión</h3>
		<p>Nuestra visión es crear un mundo en el que la ayuda y el apoyo sean accesibles para todas las personas, sin importar su ubicación o recursos. Imaginamos un ecosistema de donaciones en línea en el que cada contribución, por pequeña que sea, tenga un impacto significativo y se traduzca en un cambio positivo para las comunidades más vulnerables. Queremos ser el principal facilitador de esta visión.</p>
	
	</div>
</div>
<div class="card">
	<figure>
		<img src="{{asset('img/el-respeto.png')}}">
	</figure>
	<div class="contenido-card">
		<h3>Valores</h3>
		<p>*Integridad
			*Compromiso
			*Colaboración
			*Empatía
		</p>
		
	</div>
</div>
</div>
	 <br>
	 <br>
	 <div class="title-cards">
		<h2>Enviar Preguntas</h2>
	</div>
    <section>
    <center>
        <form action="procesar.php" method="post">
			<label for="correo">Correo electrónico:</label>
			<br>
            <input type="email" name="correo" id="correo">
            <br>
            <label for="nombre">Nombre:</label>
			<br>
            <input type="text" name="nombre" id="nombre">
            <br>
          
            <label for="mensaje">Mensaje:</label>
			<br>
            <textarea name="mensaje" id="mensaje" rows="10" cols="30"></textarea>
            <br>
			<button>Enviar</button>
        </form>
	</center> 
    </section>
    <br>

			
		</main>

		@include('layouts.footer')

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
		<script src="script.js"></script>
	</body>
</html>
