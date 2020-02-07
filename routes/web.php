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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
