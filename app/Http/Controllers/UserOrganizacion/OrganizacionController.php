<?php

namespace App\Http\Controllers\UserOrganizacion;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class OrganizacionController extends Controller
{
    public function index(){
        if(Auth::user()->validacion==0){
            return to_route('validacion');
        }
        $projects = Project::where('id_user', Auth::user()->id)->get();
        return view('user.index',['projects'=>$projects]);
    }

    public function form(Request $req){
        if(Auth::user()->validacion==1){
            
            return view('user.registroProyecto', ['project'=> new Project()]);
        }
    }

    public function editProject(Request $req){
        if(Auth::user()->validacion==1){
            $project = Project::find($req->id);
            $project->imagen = 'storage/'.$project['id_user'].'/'.$project['imagen'];
            return view('user.registroProyecto', ['project'=> $project]);
        }
    }

    public function storeProjects(Request $request){
        $request->validate([
            'nombre'=>['required'],
            'descripcion'=>['required'],
            'montoSolicitado'=>['required'],
        ]);

        $project = Project::find($request->id);
        if ($project) {
            // Actualizar proyecto existente
            $project->nombre = $request->nombre;
            $project->descripcion = $request->descripcion;
            $project->montoSolicitado = $request->montoSolicitado;
            $project->id_user = Auth::user()->id;
            if ($request->hasFile('avances')) {
                $project->avances = time() . '.' .$request->file('avances')->getClientOriginalName();
                Storage::putFileAs('/public/'.$project->id_user.'/', $request->file('avances'),$project->avances);
            }
            if ($request->hasFile('imagen')) {
                $project->imagen = time() . '.' .$request->file('imagen')->getClientOriginalName(); 
                Storage::putFileAs('/public/'.$project->id_user.'/', $request->file('imagen'),$project->imagen);
            }
            $project->save();
            Alert::success('Proyecto actualizado');
            return to_route('miOrganizacion');
            } else {
                // Crear nuevo proyecto
                $project = new Project();
                $project->nombre = $request->nombre;
                $project->descripcion = $request->descripcion;
                $project->montoSolicitado = $request->montoSolicitado;
                $project->id_user = Auth::user()->id;
                if ($request->hasFile('avances')) {
                    $project->avances = time() . '.' .$request->file('avances')->getClientOriginalName();
                    Storage::putFileAs('/public/'.$project->id_user.'/', $request->file('avances'),$project->avances);
                }
                if ($request->hasFile('imagen')) {
                    $project->imagen = time() . '.' .$request->file('imagen')->getClientOriginalName(); 
                    Storage::putFileAs('/public/'.$project->id_user.'/', $request->file('imagen'),$project->imagen);
                }
                $project->save();
                Alert::success('Proyecto registrado');
                return to_route('miOrganizacion');
            }
        }

    
    public function consulta(){
       $organizaciones = User::where('validacion',1)->get();
       
       return view('organizaciones',['lista'=>$organizaciones]);
    }


    public function deleteProject(Request $req){
        $project = Project::find($req->id);
        $project->delete();
        Alert::success('Proyecto eliminado');
        return to_route('miOrganizacion');
    }

}
