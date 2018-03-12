<?php

use Illuminate\Http\Request;
use App\Agendamento;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('auth/login', 'Api\AuthController@login');
Route::post('auth/refresh', 'Api\AuthController@refresh');
Route::get('auth/logout', 'Api\AuthController@logout');


Route::group(['middleware' => 'jwt.auth', 'namespace' =>'Api\\'], function() {
    
    Route::get('auth/me', 'AuthController@me');

    Route::post('agendamentos', 'AgendamentoController@store');

    Route::get('historico/{id}', 'AgendamentoController@show');

    //Route::post('agendamentos/{id}', 'AgendamentoController@delete');

    Route::get('meuscontatos/{id}','UserController@showUser');

    Route::post('editarcontato/{id}', 'UserController@editUser');
});



