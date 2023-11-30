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
		<link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
		<link rel="stylesheet" href="{{asset('css/proyectcss.css')}}"/>
		<link rel="icon" href="{{asset('img/logoProyecto.png')}}">
	</head>
	<body>
		@include('layouts.header_org')
    <br>

	

        
	
	 <div class="title-cards">
		<h2>Registrar Proyecto </h2>
	</div>
    <section>
    <center>
        <form method="POST" action="{{route('registrarProyecto')}}" enctype="multipart/form-data">
			@csrf
		
			<div>
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" id="nombre" value="{{ old('nombre',$project->nombre)}}"
				placeholder="Nombre del proyecto">
			</div>
		
			<div>
				<label for="descripcion">Descripción:</label>
				<textarea name="descripcion" id="descripcion" placeholder="Describe para qué será utilizado el dinero">{{ old('descripcion', $project->descripcion) }}</textarea>
			</div>
			
			<div>
				<label for="montoSolicitado">Monto solicitado $:</label>
				<input type="number" name="montoSolicitado" id="montoSolicitado" value="{{ old('montoSolicitado', $project->montoSolicitado) }}" max="200000" placeholder="Máximo $200,000">
			</div>
			@if($project->id)
			<div>
				@if ($project->avances)
				<p>Ya existe un archivo, si no deseas cambiarlo no selecciones nada</p>
				@endif
				<label for="avances">Avances:</label>
				<input type="file" name="avances" id="avances"
				accept="{{ old('avances', $project->avances) }}">
			</div>
			@endif
		
			<div>
				<label for="imagen">Imagen:</label>
				@if ($project->imagen)
					<p>Imagen actual:</p>
					<img src="{{ asset($project->imagen) }}" alt="Imagen actual"
					height="120px">
				@endif
				<input type="file" name="imagen" id="imagen">
				@if ($project->imagen)
				<p>"Si no deseas cambiarla, no selecciones imagen"</p>
				@endif
			</div>
			<input type="hidden" name="id" value="{{ old('id', $project->id)}}">
		
			<button type="submit">Enviar</button>
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
