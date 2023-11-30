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
                    <div class="img-1">
                        <img src="{{ asset($project['imagen']) }}" width="250" height="250" alt="Imagen Blog 1" />
                        <h2 class="jesusroch_text"></h2>

                        <p class="movie_text"></p>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <h1 class="arrival_text">{{$project['nombre']}}</h1>

                    <div class="movie_main">
                        <div class="mins_text">{{$project['descripcion']}}</div>
                    </div>


					<div id="stars-container">
                    <i class="fa fa-star" style="cursor: pointer;" data-index="1"></i>
                    <i class="fa fa-star" style="cursor: pointer;" data-index="2"></i>
                    <i class="fa fa-star" style="cursor: pointer;" data-index="3"></i>
                    <i class="fa fa-star" style="cursor: pointer;" data-index="4"></i>
                    <i class="fa fa-star" style="cursor: pointer;" data-index="5"></i>
				</div>
				
					
                
                        
                    
                    <p class="long_text">Calificacion Organizacion:{{ isset($resultado) ? $resultado : 'No hay calificacion' }} </p>
                    
                        <p class="long_text" id="result">Calificación: 0</p>
                        <!-- Formulario -->
                        <form id="miFormulario">

                            <p class="long_text">Monto: <input type="number" id="tentacles" name="nombre_variable" max="200000"
                                    onchange="obtenerValor()"></p>

                        </form>

                        <div id="paypal-button-container"></div>







                    <script>
                        // Inicializar botones de PayPal fuera de la función obtenerValor()
                        var paypalButtons = paypal.Buttons({
                            style: {
                                color: 'blue',
                                shape: 'pill',
                                label: 'pay',
                            },
                            createOrder: function (data, actions) {
                                var valor = $("#nombre_variable").val();
                                return actions.order.create({
                                    purchase_units: [{
                                        amount: {
                                            value: valor
                                        }
                                    }]
                                });
                            },
                            onApprove: function (data, actions) {
                                let URL = 'http://localhost/DonateHappiness/public/pagoDatos'
                                actions.order.capture().then(function (detalles) {
                                    console.log(detalles);

                                    let url = 'http://localhost/DonateHappiness/public/pagoDatos'


                                    return fetch(url, {
                                        method: 'post',
                                        headers: {
                                                'Content-Type': 'application/json',
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    
                                            },
                                        body: JSON.stringify({
                                            detalles: detalles
                                        })
                                    })
                                });
                            },
                            onCancel: function (data) {
                                alert("Pago Cancelado");
                                console.log(data);
                            }
                        });

                        // Renderizar los botones de PayPal en el contenedor
                        paypalButtons.render('#paypal-button-container');

                        // Función para actualizar la transacción cuando cambia el valor
                        function actualizarTransaccion() {
                            // Reinicializar los botones de PayPal con el nuevo monto
                            paypalButtons.close();
                            paypalButtons = paypal.Buttons({
                                style: {
                                    color: 'blue',
                                    shape: 'pill',
                                    label: 'pay',
                                },
                                createOrder: function (data, actions) {
                                    var valor = $("#nombre_variable").val();
                                    return actions.order.create({
                                        purchase_units: [{
                                            amount: {
                                                value: valor
                                            }
                                        }]
                                    });
                                },
                                onApprove: function (data, actions) {
                                    let URL = 'http://localhost/DonateHappiness/public/pagoDatos'
                                    actions.order.capture().then(function (detalles) {
                                        console.log(detalles);

                                        let url =
                                            'http://localhost/DonateHappiness/public/pagoDatos'


                                        return fetch(url, {
                                            method: 'post',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            body: JSON.stringify({
                                                detalles: detalles
                                            })
                                        })
                                    });
                                },
                                onCancel: function (data) {
                                    alert("Pago Cancelado");
                                    console.log(data);
                                }
                            });
                            paypalButtons.render('#paypal-button-container');
                        }

                        // Asignar la función actualizarTransaccion() al evento change del campo
                        $("#nombre_variable").on("change", function () {
                            actualizarTransaccion();
                        });

                    </script>
                </div>
            </div>
        </div>
        
        @include('layouts.footer')


        <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
        <script src="js/scrip1.js"></script>
        <script src="{{asset('js/java.js')}}"></script>
</body>

</html>
