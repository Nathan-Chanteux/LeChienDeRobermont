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
/*
 * Route permettant d'appeler l'afficher la page d'accueil
 */
Route::get('/', function(){
    return App::make('App\Http\Controllers\Rubriques\RubriquesController')->afficheRubriquesAction('accueil');
});

//Route::get('/menu', 'Rubriques\RubriquesController@afficheMenuAction');
/*
 * Route permettant d'appeler l'afficher les pages des rubriques
 * @params: string slugRubrique
 */
Route::get('/{slugRubrique}','Rubriques\RubriquesController@afficheRubriquesAction');

/*
 * Route permettant d'appeler l'affichage de la liste des articles à modifier
 * @params: /
 */
Route::get('/admin/article','Articles\ArticlesController@show');

/*
 * Route permettant d'appeler la création d'un article
 * @params: /
 */
Route::get('/admin/article/ajout','Articles\ArticlesController@create');

/*
 * Route permettant d'appeler la  sauvegarde d'un article
 * @params: /
 */
Route::post('/admin/article/add','Articles\ArticlesController@store');

/*
 * Route permettant d'appeler la modification d'un article
 * @params: string slugArticle
 */
Route::get('/admin/article/modification/{slugArticle}','Articles\ArticlesController@edit');

/*
 * Route permettant d'appeler la sauvegarde de la modification d'un article
 * @params: /
 */
Route::post('/admin/article/up','Articles\ArticlesController@update');

/*
 * Route permettant d'appeler suppression d'un article
 * @params: string slugArticle
 */
Route::get('/admin/article/supprimer/{slugArticle}','Articles\ArticlesController@destroy');


/*
 * Route permettant d'appeler le systhème de connexion
 * @params: /
 */
Route::post('/auth/user','Users\UsersController@login');

/*
 * Route permettant d'appeler le systhème de déconnexion
 * @params: /
 */
Route::get('/auth/logout','Users\UsersController@logout');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
