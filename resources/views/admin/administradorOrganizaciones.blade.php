<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
    <title>donate/happiness</title>
	<link rel="icon" href="{{asset('img/logoProyecto.png')}}">

	<link rel="stylesheet" href="{{asset('css/style3.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
            
            <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
            <!-- style css -->
            <link rel="stylesheet" type="text/css" href="{{asset('css/style1.css')}}">
            
</head>
<body>
	@include('layouts.header_admin')



	<main >

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
						<img src="{{ asset($user['imagen']) }}" width="200" height="200" alt="Imagen Blog 1" />
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
						<h2>Nombre de la organizacion:</p> {{$user['name']}}</h2>
						<h3>

							Descripcion de la organizacion: <br>
						</h3>
						<p>{{$user['descripcion']}}</p>
						
						<div class="btn-read-more"> <a href="{{route('verOrgAd', ['id' => $user['id']])}}"> Leer más</a></div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
	</main>

	 @include('layouts.footer')

	<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>

</html>