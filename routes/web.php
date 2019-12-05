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

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('FormularioEditar', 'HomeController@VistaEditarUsuario')->name('FormularioEditar')->middleware('verified');
Route::post('FormularioEditar', 'HomeController@EditarUsuario')->name('ConfirmarEdicion')->middleware('verified');
Route::get('EliminarUsuario', 'HomeController@EliminarUsuario')->name('EliminarUsuario')->middleware('verified');


//Route::get('/admin', 'adminController@index')->name('admin');
Route::get('/admin', 'adminController@index')->middleware('auth', 'role:Administrador')->name('name');
