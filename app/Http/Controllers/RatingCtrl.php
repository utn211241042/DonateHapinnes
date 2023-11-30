<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Rating;
use Illuminate\Http\Request;


class RatingCtrl extends Controller
{
    //
    public function guardarCalificacion(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'calificacion' => 'required|integer|min:1|max:5',
        ]);

        

        Rating::create([
            'puntaje' => $request->calificacion
           
            // Agrega más campos según sea necesario
        ]);
        // Calificacion::create(['valor' => $request->calificacion]);

        return response()->json(['mensaje' => 'Calificación guardada exitosamente']);
    }



public function consulta(Request $request){
    $numero = Rating::orderBy('id', 'desc')->value('id');
    $project= Project::find($request->id);
    $project->imagen = 'storage/'.$project['id_user'].'/'.$project['imagen'];
    $totalrating = Rating::sum('puntaje');

    if ($numero != 0) {
    $rating = $totalrating/$numero; 
    return view('interfaz',['resultado' => $rating, 'project'=>$project]);
    }else{
    return view('interfaz', ['project'=>$project]);
 }
}

}
