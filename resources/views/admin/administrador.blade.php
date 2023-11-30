<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="{{asset('css/style3.css')}}">
        <title>donate/happiness</title>
        
        <link rel="icon" href="img/logoProyecto.png">
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    </head>

<body>
    @include('layouts.header_admin')
    <br>
    <br>
    <h1 class="heading-1">Bienvenido Administrador</h1>

    <br>
    <br>
    <center>
        <div>

            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre Organización</th>
                        <th>Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($users as $user) 
                    <tr>
                        <td>{{$user['id']}}</td>
                        <td>{{$user['name']}}</td>
                        <td><div class="btnn-read-more"><i class="fa fa-eye" aria-hidden="true"></i><a href="{{route('leerMas', ['id' => $user['id']])}}"> Leer más</a></div></td> 
                    </tr>
                    
                    @endforeach
                    

                </tbody>
            </table>
        </div>
    </center>
    <br>
    <br>
    <br>
    @include('layouts.footer')
</body>

</html>
