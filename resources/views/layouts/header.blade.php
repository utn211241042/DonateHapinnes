<link rel="stylesheet" href="{{asset('css/styles.css')}}" />
<link rel="stylesheet" href="{{asset('css/styles2.css')}}">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Comsunicate</span>
							<span class="number">553-55-23-05-85</span>
						</div>
					</div>
				
					<div class="container-logo">
						<img src="img/logoProyecto.png" width="100px"  >
						<h1 class="logo"><marquee><a href="index.html">donate/happiness</a></marquee></h1>
					</div>

					<div class="container-user">
						
						<i class="fa-solid fa-user"><a href="iniciosesion.html"></a></i>
						<h2 class="logo"><a href="<?php echo url('/sesionregistro')?>">Inicio de sesión</a></h2>
						
						
					</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="<?php echo url('/')?>">Inicio</a></li>
						<li><a href="<?php echo url('/allOrganizaciones')?>">Organizaciones</a></li>
						<li><a href="<?php echo url('/conocenos')?>">Conocenos</a></li>
						<li><a href="<?php echo url('/ayuda')?>">Ayuda</a></li>
					
						
					</ul>

					<section class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</section>
				</nav>
			</div>
		</header>
		@include('sweetalert::alert')
		{{-- CDN --}}
		{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}