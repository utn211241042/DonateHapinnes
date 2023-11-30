<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use RealRashid\SweetAlert\Facades\Alert;

class RegistroDeOrganizacionesController extends Controller
{
    //
    /** Para subir imagenes
     * <form method="POST" action="/upload" enctype="multipart/form-data">
     * @csrf
     *<input type="file" name="image">
     *<button type="submit">Upload</button>
     *</form>
     */
    public function store(Request $request){
        $request->validate([
            'email'=>['required', 'email'],
            'name'=>['required'],
           // 'password'=>['required', 'confirmed', Rules\Password::defaults()]
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'direccion'=>$request->direccion,
            'mision'=>$request->mision,
            'vision'=>$request->vision,
            'descripcion'=>$request->descripcion,
            'telefono'=>$request->telefono,
            'validacion'=>0,
            'password'=>bcrypt($request->password)
        ]);
        $user = User::where('email', $request->email,)->first();

        if ($request->hasFile('documento')) {
            $user->documento = time() . '.' .$request->file('documento')->getClientOriginalName();
            Storage::putFileAs('/public/'.$user->id.'/', $request->file('documento'),$user->documento);
        }
        if ($request->hasFile('imagen')) {
            $user->imagen = time() . '.' .$request->file('imagen')->getClientOriginalName(); 
            Storage::putFileAs('/public/'.$user->id.'/', $request->file('imagen'),$user->imagen);
        }

        $user->save();
        
        Alert::success('Registro exitoso', 'Espera a que el administrador todo poderoso apruebe tu solicitud');
        return to_route('sesionregistro');
    }
}
