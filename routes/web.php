<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//App::setlocale('es');
Route::get('locale/{locale}', function($locale){
	Session::put('locale',$locale);
	return redirect()->back();
})->name('change_lang');

/*Route::get('/', function () {

	$user=Auth::user();

	if($user->esAdmin()){
		return view('administrador');
	}
	else{
    	return view('index');
    }
});*/
/*Route::get('/', function(){
  if(isset(Auth::user()->role_id)){

  	if(Auth::user()->role_id==1){
  		return view('estandar');
  	}
  	else if(Auth::user()->role_id==3) {
  		
  			return view('administrador');
  		
  	}
    
  }
	return view('index');
});*/
Route::get('/', function(){
  return view('index');
})->name('landing');

Route::post('contacto', 'contactoController@insert')->name('contacto');
Route::get('refugios', 'RefugioController@index')->name('refugios');
Route::get('/refugio/{id}', 'RefugioController@show')->name('refugio');
Route::get('organizaciones', 'OrganizacionesController@index')->name('organizaciones');

Auth::routes(['verify' => true]);

//Rutas usuario
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('FormularioEditar/{id}', 'HomeController@VistaEditarUsuario')->name('FormularioEditar')->middleware('verified');
Route::post('FormularioEditar/{id}', 'HomeController@EditarUsuario')->name('ConfirmarEdicion')->middleware('verified');
Route::get('EliminarUsuario/{id}', 'HomeController@EliminarUsuario')->name('EliminarUsuario')->middleware('verified');

//Rutas mascotas
Route::resource('mascotas', 'mascotasController');
Route::resource('org', 'OrganizacionesController');

//Rutas Admin
//Route::get('/admin', 'adminController@index')->name('admin');
Route::get('/admin', 'adminController@index')->middleware('auth', 'role:Administrador')->name('admin');
Route::get('/org/create', 'OrganizacionesController@create')->middleware('auth', 'role:Administrador')->name('org.create');
Route::get('/admin/users', 'adminController@usersAdmin')->middleware('auth', 'role:Administrador')->name('usersAdmin');
Route::get('/admin/mascotas', 'adminController@mascAdmin')->middleware('auth', 'role:Administrador')->name('mascAdmin');
Route::get('/admin/organizaciones', 'adminController@orgAdmin')->middleware('auth', 'role:Administrador')->name('orgAdmin');

Route::get('/veterinarios', 'VeterinarioController@index')->name('veterinarios');

Route::get('/veterinario/{id}', 'VeterinarioController@show')->name('veterinario');

Route::get('/hoteles', 'HotelesController@index')->name('hoteles');

Route::get('/hotel', 'HotelesController@show')->name('hotel');


Route::get('/formulario', 'contactoController@index')->name('formularioEncargado');
Route::post('/formularioenc', 'contactoController@store')->name('formularioEnc');

