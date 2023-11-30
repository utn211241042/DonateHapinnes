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
		<link rel="icon" href="{{asset('img/logoProyecto.png')}}">
	</head>
	<body>
		@include('layouts.header_org')

		

		<main class="main-content">

			<section class="container top-categories">
                <br>
                <br>
				@auth
            
                
              
				<h1 class="heading-1">BIENVENIDO {{auth()->user()->name}}</h1>
                <br>
                <br>
				  @endauth
			</section>
		</main>

		@include('layouts.footer')

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>
