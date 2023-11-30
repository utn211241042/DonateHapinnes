<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    public function index(){
        $users = User::where('validacion', 0)->get();
        
        return view('admin.administrador',['users'=>$users]);
    }

    public function organizaciones(){
        $users = User::where('validacion', 1)->get();
        
        foreach ($users as $user) {
            $user->imagen = 'storage/'.$user['id'].'/'.$user['imagen'];
        }
        return view('admin.administradorOrganizaciones',['users'=>$users]);
    }

    public function show(Request $req){

        $user = User::find($req->id);
        $img = 'storage/'.$user['id'].'/'.$user['imagen'];
        $pdf = 'storage/'.$user['id'].'/'.$user['documento'];
        return view('admin.aceptarorganizacion', ['user'=>$user,'img' => $img,'pdf'=>$pdf]);
    }

    public function aceptar(Request $req){
        $user = User::find($req->id);
        $user->validacion = 1;
        $user->save();
        Alert::success('Usuario aprobado');
        return to_route('administrador');
        
    }

    public function rechazar(Request $req){
        $user = User::find($req->id);
        $user->delete();
        Alert::success('Usuario eliminado');
        return to_route('miOrganizacion');
    }
    

    public function detalles(Request $req){
        $user = User::find($req->id);
        $img = 'storage/'.$user['id'].'/'.$user['imagen'];
        $pdf = 'storage/'.$user['id'].'/'.$user['documento'];
        $projects = Project::where('id_user', $user->id)->get();
        foreach ($projects as $project) {
            $project->imagen = 'storage/'.$project['id_user'].'/'.$project['imagen'];
        }
        
        return view('admin.detallesOrgAd', ['user'=>$user,'img' => $img,'pdf'=>$pdf,'projects'=>$projects]);
    }
}
