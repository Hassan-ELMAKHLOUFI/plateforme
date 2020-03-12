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
Route::Resource('create-test','TestController');
Route::get('profauth/create-test/{prof}','TestController@index2');
Route::resource('Resultat','ResultatController');
Route::get ('question/{test_id}','TestController@question');
Route::get ('result','ResultatController@test');
Route::get('test','TestController@index1');
Route::Resource('create-qcm','QCMController');
Route::get('create-question1/{test_id}','question@index2');

Route::Resource('create-question','question');
Route::Resource('create-binaire','BinaireController');
Route::Post('create-binstore','BinaireController@store1');
Route::get('create-bin/{test_id}','BinaireController@index1');
Route::get('create-qcm1/{test_id}','QCMController@index2');
Route::get('create-qcm','QCMController@index1');
Route::get('select-question/{test_id}','question@select');
Route::Post('StoreSelected','question@StoreSelected');


Route::get('/session_pdf/{test}','TestController@export_pdf')->name('test.pdf');
Route::get('test/{s}','TestController@index1')->name('tests');
Route::get('/session_pdf/{test}','TestController@export_pdf')->name('create-test.pdf');


Route::get('session','Auth\SessionController@index')->name('session');
Route::post('session/login','Auth\SessionController@sessionLogin')->name('session');
Route::get('admin','Auth\AdminController@index')->name('admin');
Route::post('admin/login','Auth\AdminController@adminLogin')->name('admin');
Route::get('profauth/login','Auth\ProfauthController@index')->name('profauth.login');
Route::post('profauth/test','Auth\ProfauthController@professeurLogin')->name('profauth.test');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('departement/import', 'departementController@import')->name('departement.import');
Route::post('etudiant/import', 'EtudiantController@import')->name('etudiant.import');
Route::post('filiere/import', 'FiliereController@import')->name('filiere.import');
Route::post('matiere/import', 'MatiereController@import')->name('matiere.import');
Route::post('module/import', 'ModuleController@import')->name('module.import');
Route::post('niveau/import', 'NiveauController@import')->name('niveau.import');
Route::post('professeur/import', 'ProfesseurController@import')->name('professeur.import');
