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
                    <div class="btn-read-more"><i class="fa fa-check-circle" aria-hidden="true"></i><a href="{{route('aceptar', ['id' => $user['id']])}}"> Aceptar</a></div>
                    <div class="btn-read-more"><i class="fa fa-times" aria-hidden="true"></i><a href="{{route('rechazar', ['id' => $user['id']])}}"> Rechazar</a> </div>
				</div>
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