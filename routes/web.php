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
// Login Routes...
//$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//$this->post('login', 'Auth\LoginController@login');
//$this->get('logout', 'Auth\LoginController@logout')->name('logout');
//
//// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//
//$this->post('password/reset', 'Auth\ResetPasswordController@reset');

//Ruta para ver logs de errores
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

//Route::group(['middleware' => ['auth','admin']], function () {
    $this->get('/', 'HomeController@index')->name('home');
    $this->get('home', 'HomeController@index')->name('home');
//    $this->resource('usuarios', 'UsuarioController');
//    $this->resource('ubicacions', 'UbicacionController');
//});


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    $this->get('/', 'HomeController@homeweb')->name('homeweb');
    $this->get('/contacto', 'HomeController@contacto')->name('contacto');
});



