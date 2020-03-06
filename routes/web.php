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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::Resource('admin','AdminController');
Route::Resource('departement','DepartementController');
Route::Resource('etudiant','EtudiantController');
Route::Resource('filiere','FiliereController');
Route::Resource('filiereNiveau','FiliereNiveauController');
Route::Resource('matiere','MatiereController');
Route::Resource('matiereProf','MatiereProfController');
Route::Resource('module','ModuleController');
Route::Resource('moduleFiliere','ModuleFiliereController');
Route::Resource('niveau','NiveauController');
Route::Resource('professeur','ProfesseurController');
Route::Resource('groupe','GroupeController');
Route::Resource('test','TestController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('departement/import', 'departementController@import')->name('departement.import');
Route::post('etudiant/import', 'EtudiantController@import')->name('etudiant.import');
Route::post('filiere/import', 'FiliereController@import')->name('filiere.import');
Route::post('matiere/import', 'MatiereController@import')->name('matiere.import');
Route::post('module/import', 'ModuleController@import')->name('module.import');
Route::post('niveau/import', 'NiveauController@import')->name('niveau.import');
Route::post('professeur/import', 'ProfesseurController@import')->name('professeur.import');
