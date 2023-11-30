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
		@include('layouts.header')
		

		<main class="main-content">

			<section class="container top-categories">
                <br>
                <br>
				<h1 class="heading-1">Organizaciones</h1>
                <br>
                <br>
				<div class="container-blogs">
					@foreach($users as $user)
					<div class="card-blog">
						<div class="container-img">
							<img src="{{asset($user['imagen'])}}" width="200" height="200" alt="Imagen Blog 1" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>{{$user['name']}}</h3>
							{{-- <span>29 Noviembre 2022</span> --}}
							<p>
								{{$user['descripcion']}}
							</p>
							<div class="btn-read-more"><a href="{{route('detallesO',['id'=>$user['id']])}}">Leer más</a></div>
						</div>
					@endforeach
					</div>
				</div>
			</section>
		</main>

		@include('layouts.footer')

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>
