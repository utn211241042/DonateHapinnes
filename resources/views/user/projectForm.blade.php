@include('layouts.header_org')
<link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
		<link rel="stylesheet" href="{{asset('css/proyectcss.css')}}"/>
		<link rel="icon" href="{{asset('img/logoProyecto.png')}}">
<form method="POST" action="{{route('registrarProyectoView')}}" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
    </div>

    <div>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion"></textarea>
    </div>

    <div>
        <label for="montoSolicitado">Monto solicitado:</label>
        <input type="number" name="montoSolicitado" id="montoSolicitado">
    </div>

    <div>
        <label for="avances">Avances:</label>
        <input type="file" name="avances" id="avances">
    </div>

    <div>
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen">
    </div>

    <button type="submit">Enviar</button>
</form>
@include('layouts.footer')
