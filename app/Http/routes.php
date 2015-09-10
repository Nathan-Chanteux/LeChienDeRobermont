<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function(){
    return App::make('App\Http\Controllers\Rubriques\RubriquesController')->afficheRubriquesAction('accueil');
});

//Route::get('/menu', 'Rubriques\RubriquesController@afficheMenuAction');

Route::get('/{slugRubrique}','Rubriques\RubriquesController@afficheRubriquesAction');

Route::get('/admin/article','Articles\ArticlesController@show');
Route::get('/admin/article/ajout','Articles\ArticlesController@create');
Route::post('/admin/article/add','Articles\ArticlesController@store');
Route::get('/admin/article/modification/{slugArticle}','Articles\ArticlesController@edit');
Route::post('/admin/article/up','Articles\ArticlesController@update');
Route::get('/admin/article/supprimer/{slugArticle}','Articles\ArticlesController@destroy');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
