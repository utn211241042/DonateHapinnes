<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    
    public function store(Request $request){
        $credenciales = $request->validate([
            'email'=>['required'],
            'password'=>['required']
        ]);
        // dd(Auth::attempt($credenciales));
        // if(Auth::attempt($credenciales)){
        //     if(Auth::user()->validacion==1){
        //         return to_route('dashboardOrganizacion');
        //     }else{
        //     return to_route('validacion');
        //     }
        // }else{
        //     throw ValidationException::withMessages([
        //         'email' => 'Correo o contraseña incorrectos'
        //     ]);
        // }  


        if (Auth::guard('admin')->attempt($credenciales)) {
            Auth::shouldUse('admin');
            Alert::success('Bienvenido amo y señor');
            return to_route('administrador');
        } elseif (Auth::guard('web')->attempt($credenciales)) {
            if(Auth::user()->validacion==1){
                Alert::success('Inicio de sesión exitoso');
                return to_route('miOrganizacion');
            }else{
                Alert::info('Aún no se ha revisado su solicitud');
            return to_route('validacion');
            }
        }else{
            throw ValidationException::withMessages([
                'email' => 'Correo o contraseña incorrectos'
            ]);
        }    
    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::info('Ha cerrado sesión');
        return to_route('sesionregistro');
    }
}
