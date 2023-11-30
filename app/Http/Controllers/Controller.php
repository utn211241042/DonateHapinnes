<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function allOrganizaciones(){
        $users = User::all();
        
        foreach ($users as $user) {
            $user->imagen = 'storage/'.$user['id'].'/'.$user['imagen'];
        }
        return view('organizaciones',['users'=>$users]);
    }

    public function detallesO(Request $request){
        $user = User::find($request->id);

        $user->imagen = 'storage/'.$user['id'].'/'.$user['imagen'];
        $pdf = 'storage/'.$user['id'].'/'.$user['documento'];
        $projects = Project::where('id_user', $user->id)->get();
        foreach ($projects as $project) {
            $project->imagen = 'storage/'.$project['id_user'].'/'.$project['imagen'];
        }
        
        return view('interfaz2',['user'=>$user,'projects'=>$projects]);
    }
}
