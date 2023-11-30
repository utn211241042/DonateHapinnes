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
		<link rel="shortcut icon" href="resources/css/style.css" />
		<link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
		<link rel="icon" href="{{asset('img/logoProyecto.png')}}">
	</head>
	<body>
		
		@include('layouts.header')
		<section class="banner">
			<div class="content-banner">
				<p>Una sonrisa </p>
				<h2>Actuar.<br/>Ayudar.</h2><h2>Avanzar.</h2>
				<a href="#">Dona ahora</a>
			</div>
		</section>

		<main class="main-content">
			<section class="container container-features">
				<div class="card-feature">
					<i class="fa fa-address-book-o"></i>
					<div class="feature-content">
						<span>Resgistra tu organización</span>
						<p>Registra tu organización sin fines de lucro</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-wallet"></i>
					<div class="feature-content">
						<span>Proyectos help</span>
						<p>100% honesto</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa fa-handshake-o"></i>
					<div class="feature-content">
						<span>Seguro</span>
						<p>Seguridad 24/7</p>
					</div>
				</div>

			</section>

			<section class="container top-categories">
				<h1 class="heading-1">Organizaciones</h1>
				<div class="container-categories">
					<div class="card-category category-moca">
						<p>Angeles con Patas</p>
						<span>Ver más</span>
					</div>
					<div class="card-category category-expreso">
						<p>Social</p>
						<span>Ver más</span>
					</div>
					<div class="card-category category-capuchino">
						<p>Juvenil</p>
						<span>Ver más</span>
					</div>
				</div>
			</section>

			<section class="container top-products">
				<h1 class="heading-1">Proyectos </h1>

				<div class="container-options">
					<span class="active">Destacados</span>
					<span>Más recientes</span>
					
				</div>

				<div class="container-products">
					
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="{{asset('img/proye3.jpg')}}"
								alt="Cafe incafe-ingles.jpg"
							/>
						
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Fundación para personas de pocos recursos</h3>
							<div class="btn-read-more" >Leer más</div>
							
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="{{asset('img/proye2.jpg')}}"
								alt="Cafe Australiano"
							/>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Fundación para perros de la calle</h3>
							<div class="btn-read-more" >Leer más</div>
							
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="{{asset('img/proyecto4.jpg')}}" alt="Cafe Helado" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Fundación para niños con cancer</h3>
							<div class="btn-read-more" >Leer más</div>
						</div>
					</div>
				</div>
			</section>

			<section class="gallery">
				<img
					src="{{asset('img/galeri1.jpg')}}"
					alt="Gallery Img1"
					class="gallery-img-1"
				/><img
					src="{{asset('img/galeria2.jpg')}}"
					alt="Gallery Img2"
					class="gallery-img-2"
				/><img
					src="{{asset('img/galeri3.jpg')}}"
					alt="Gallery Img3"
					class="gallery-img-3"
				/><img
					src="{{asset('img/galeri4.jpg')}}"
					alt="Gallery Img4"
					class="gallery-img-4"
				/><img
					src="{{asset('img/galeria5.jpg')}}"
					alt="Gallery Img5"
					class="gallery-img-5"
				/>
			</section>

			

			
		</main>

		@include('layouts.footer')

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>
