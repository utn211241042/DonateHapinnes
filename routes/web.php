<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistroDeOrganizacionesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PagoCtrl;
use App\Http\Controllers\RatingCtrl;
use App\Http\Controllers\UserOrganizacion\OrganizacionController;
use App\Models\Project;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/allOrganizaciones', [Controller::class,'allOrganizaciones'])->name('allOrganizaciones');

Route::get('/conocenos', function () {
    return view('conocenos');
});
Route::get('/ayuda', function () {
    return view('ayuda');
});
Route::get('/pago', function () {
    return view('pago');
});

Route::get('/detallesO/{id}', [Controller::class,'detallesO'])->name('detallesO');

Route::get('/organizacionP', [Controller::class,'organizacionP'])->name('organizacionP');









Route::view('/sesionregistro','auth.iniciosesion')->name('sesionregistro');
Route::view('/registro','auth.registro')->name('registro');
Route::post('/sesionregistro', [RegistroDeOrganizacionesController::class, 'store'])->name('registrar');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::post('/pagoDatos', [PagoCtrl::class, 'store'])->name('pagoDatos');

Route::post('/rating', [RatingCtrl::class, 'guardarCalificacion'])->name('rating');


Route::get('/organizacionP/{id}', [RatingCtrl::class, 'consulta'])->name('interfaz');

//Route::view('/miOrganizacion', 'miOrganizacion')->middleware('auth')->name('dashboardOrganizacion');
Route::get('/miOrganizacion', [OrganizacionController::class,'index'])->middleware('auth:web')->name('miOrganizacion');
//Route::view('/validacion', 'validacion')->middleware('auth')->name('validacion');
Route::get('/validacion', function(){
    if(Auth::user()->validacion==0){
        return view('validacion');
    }
})->middleware('auth:web')->name('validacion');
//Route::view('/registerProject', 'registroProyecto')->middleware('auth')->name('registerProjectView');

Route::get('/registrarProyecto', [OrganizacionController::class,'form'])->middleware('auth:web')->name('registrarProyectoView');

Route::get('/ayudaOrg', function(){
    if (Auth::user()->validacion==1) {
        return view('user.ayudaorganizaciones');
    }
})->middleware('auth:web')->name('ayudaOrg');

Route::get('/dashboardOrg', function(){
    if (Auth::user()->validacion==1) {
        return view('user.dashboard');
    }
})->middleware('auth:web')->name('dashboardOrg');

Route::get('/preguntasOrg', function(){
    if (Auth::user()->validacion==1) {
        return view('user.preguntasorganizacion');
    }
})->middleware('auth:web')->name('preguntasOrg');

Route::get('/organizaciones', [OrganizacionController::class,'consulta'])->name('organizaciones');
Route::get('/organizacion', [OrganizacionController::class,'index'])->middleware('auth:web')->name('organizacion');


Route::post('/registrarProyecto', [OrganizacionController::class,'storeProjects'])->middleware('auth:web')->name('registrarProyecto');

Route::get('/deleteProject/{id}', [OrganizacionController::class,'deleteProject'])->middleware('auth:web')->name('deleteProject');

Route::get('/editProject', [OrganizacionController::class,'editProject'])->middleware('auth:web')->name('editProject');




Route::get('/admin', [AdminController::class,'index'])->middleware('auth:admin')->name('administrador');
Route::get('/organAdmin',[AdminController::class,'organizaciones'])->middleware('auth:admin')->name('organAdmin');
Route::view('/preguntasAdmin', 'admin.preguntasadministrador')->middleware('auth:admin')->name('preguntasadministrador');
Route::get('/dashboardAdmin', [PagoCtrl::class, 'obtenerDineroGanadoPorMes'])->middleware('auth:admin')->name('dashboardadministrador');
Route::get('/leerMas/{id}', [AdminController::class,'show'])->middleware('auth:admin')->name('leerMas');
Route::get('/aceptar/{id}', [AdminController::class,'aceptar'])->middleware('auth:admin')->name('aceptar');
Route::get('/rechazar/{id}', [AdminController::class,'rechazar'])->middleware('auth:admin')->name('rechazar');
Route::get('/verOrgAd/{id}', [AdminController::class,'detalles'])->middleware('auth:admin')->name('verOrgAd');

Route::get('/proyecto/{id}', [RatingCtrl::class, 'consulta'])->middleware('auth:admin')->name('proyecto');



Route::get('/login', function(){
    return view('auth.inicioregistro');
})->name('loginG');
