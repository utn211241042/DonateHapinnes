<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>donate/happiness</title>
	<link rel="stylesheet" href="{{asset('css/styles.css')}}" />
	<link rel="icon" href="{{asset('img/logoProyecto.png')}}">
    <link rel="stylesheet" href="{{asset('estilos.css')}}">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<!-- style css -->
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/style1.css')}}">
    <meta charset="UTF-8" />
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/styles2.css')}}">
    <title>donate/happiness</title>
		<link rel="stylesheet" href="{{asset('css/styles.css')}}" />

        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
            
            <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
            <!-- style css -->
            <link rel="stylesheet" type="text/css" href="{{asset('css/style1.css')}}">
            
</head>

<body>
	@include('layouts.header_admin')
	<!-- header section start -->
	
	<!-- header section end -->
	<!-- arrival section start -->
	<div class="arrival_section layout_padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="image">
						<img src="{{ asset($img) }}" height="300px">
						<h2 class="jesusroch_text"></h2>

						<p class="movie_text"></p>
					</div>
				</div>
				<div class="col-sm-8 col-lg-4">
					<h1 class="arrival_text">{{$user['name']}}</h1>

					<div class="movie_main">
						<H2>Dirección: </H2>
						<br>
						<h2>{{$user['direccion']}}</h2>
					</div>
					<br>
					<h3>Misión: </h3>
					<h2>{{$user['mision']}}</h2>
					<br>
					<h3>Visión:</h3>
					<p class="long_text_1">{{$user['vision']}}</p>
					<br>
					<h3>Acerca de nosotros: </h3>
					<p class="long_text_1">{{$user['descripcion']}}</p>
					
                    <br>
                    <br>
                    <br>
					<embed src="{{asset($pdf)}}" width="800px" height="500px" />
                    <br>
                    <br>
                    
				</div>
				<section class="container top-categories">
					<br>
					<br>
					<h1 class="heading-1">Proyectos</h1>
					<br>
					<br>
					<div class="container-blogs">
						<div class="card-blog">
							@foreach($projects as $project)
							<div class="container-img">
								<img src="{{ asset($project['imagen']) }}" width="200" height="200" alt="Imagen Blog 1" />
								<div class="button-group-blog">
									<span>
										<i class="fa-solid fa-magnifying-glass"></i>
									</span>
									<span>
										<i class="fa-solid fa-link"></i>
									</span>
								</div>
							</div>
							<div class="content-blogg">
								<h2>Nombre de la organizacion:</p> {{$project['nombre']}}</h2>
								<h3>
		
									Descripcion de la organizacion: <br>
									{{$project['descripcion']}}
								</h3>
								
								<div class="btn-read-more"> <a href="{{route('proyecto', ['id' => $project['id']])}}"> Veer más</a></div>
							</div>
							@endforeach
						</div>
					</div>
				</section>
			</div>
		</div>
	
		

		 <script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/jquery-3.0.0.min.js"></script>
		<!-- sidebar -->
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="js/custom.js"></script>
		<!-- javascript -->
		<script src="js/owl.carousel.js"></script>
		<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
		<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
		<script>
			$('#datepicker').datepicker({
				uiLibrary: 'bootstrap4'
			});
		</script>
		<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous">
			</script> 
			<script src="js/scrip1.js"></script>
		
	
		<script src="java.js"></script>
</body>
@include('layouts.footer')
</html>