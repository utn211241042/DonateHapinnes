<!DOCTYPE html>
<html lang="en">

<head>


    <link rel="stylesheet" href="{{asset('css/styles2.css')}}">
    <title>donate/happiness</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
    <link rel="icon" href="img/logoProyecto.png">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <!-- basic -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>TV</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style1.css')}}">


    <link rel="stylesheet" href="{{asset('css/estilos2.css')}}">
    <script
        src="https://www.paypal.com/sdk/js?client-id=Ad3K9-uUfdjByh47To5DuGGlub5oRAMggsBmRraTgYjDqQ9GrA5yKzDz5pzqd1uyruAfh6wQPqivsq_J&currency=MXN">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <!-- header section start -->
    @include('layouts.header')
    <!-- header section end -->
    <!-- arrival section start -->
    <div class="arrival_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="container-img">
                        <img src="{{asset($user['imagen'])}}" width="200" height="200">
                    </div>

                </div>
                <div class="col-sm-8 col-lg-4">
                    <h1 class="arrival_text">{{$user['name']}}</h1>

                    <div class="movie_main">
                        <div class="mins_text">{{$user['direccion']}}</div>
                    </div>
                    <p class="long_text">Misión: {{$user['mision']}}</p>
                    <p class="long_text">Visión: {{$user['vision']}}</p>

					<div id="stars-container">
                    <i class="fa fa-star" style="cursor: pointer;" data-index="1"></i>
                    <i class="fa fa-star" style="cursor: pointer;" data-index="2"></i>
                    <i class="fa fa-star" style="cursor: pointer;" data-index="3"></i>
                    <i class="fa fa-star" style="cursor: pointer;" data-index="4"></i>
                    <i class="fa fa-star" style="cursor: pointer;" data-index="5"></i>
				</div>
				
					
                
                        
                    
                    <p class="long_text">Calificacion Organizacion:{{ isset($resultado) ? $resultado : 'No hay calificacion' }} </p>
                    
                        <p class="long_text" id="result">Calificación: 0</p>

                       
                </div>
            </div>
        </div>
        <section class="container top-products">
            <h1 class="heading-1">Proyectos </h1>

            <div class="container-products">

                <!-- Producto 2 -->
                @foreach($projects as $project)
                <div class="card-product card border" >
                    <div class="container-img">
                        <img src="{{asset($project['imagen'])}}" alt="Cafe incafe-ingles.jpg" />

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
                        <h1>{{$project['nombre']}}</h1>
                        
                        
                    </div>
                    <div class="btn-read-more"><a href="{{route('interfaz',['id'=>$project['id']])}}">Leer más</a></div>
                </div>
                @endforeach
            </div>
        </section>
        @include('layouts.footer')


        <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
        <script src="js/scrip1.js"></script>
        <script src="{{asset('js/java.js')}}"></script>
</body>

</html>
