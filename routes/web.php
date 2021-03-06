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

use App\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome-etudiant.welcome');
});

//Route::Resource('admin','Auth\AdminController');
Route::group(['middleware'=>'admin.auth'],function(){
    Route::resource('departement','DepartementController');
});
Route::group(['middleware'=>'professeur'],function(){
    Route::get('create-question1/{test_id}', 'question@index2');

    Route::get('create-text-libre/{test_id}','Text_libreController@index2')->name('create-text-libre.index');
    Route::resource('create-text-libre','Text_libreController');
});

Route::get('/count','TestController@count');
Route::put('/setSession','TestController@setSession');
Route::redirect('/profauth','/profauth/login');
Route::Resource('etudiant','EtudiantController')->middleware('admin.auth');
Route::Resource('filiere','FiliereController')->middleware('admin.auth');;
Route::Resource('filiereNiveau','FiliereNiveauController')->middleware('admin.auth');;
Route::Resource('matiere','MatiereController')->middleware('admin.auth');;
Route::Resource('matiereProf','MatiereProfController')->middleware('admin.auth');;
Route::Resource('module','ModuleController')->middleware('admin.auth');;
Route::Resource('moduleFiliere','ModuleFiliereController')->middleware('admin.auth');;
Route::Resource('niveau','NiveauController')->middleware('admin.auth');;
Route::Resource('professeur','ProfesseurController')->middleware('admin.auth');;
Route::Resource('create-test','TestController');
Route::get('profauth/create-test/{prof}','TestController@index2')->name('create-test.index')->middleware('professeur');

Route::resource('Resultat','ResultatController')->middleware('session');
Route::get ('question/{test_id}/{session_id}','TestController@question')->middleware('session');
Route::get ('reponses/{test_id}','TestController@reponses');
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
Route::get('create-qcm','QCMController@index1');
Route::get('select-question/{test_id}','question@select');
Route::Post('StoreSelected','question@StoreSelected');

Route::get('/session_pdf/{test}','TestController@export_pdf')->name('test.pdf');
Route::get('/note_pdf/{test}','TestController@note_export_pdf')->name('note.pdf');
Route::get('test/{s}','TestController@index1')->name('tests');

Route::resource('option','optionController');
Route::get('create-bin/option12/binaire/{binaire_id}','optionController@index1');
Route::get('create-qcm1/option/qcm/{question_id}','optionController@index2');

Route::get('session','Auth\SessionController@index')->name('session.index');
Route::post('session/login','Auth\SessionController@sessionLogin')->name('session.login');
Route::get('session/logout','Auth\SessionController@sessionLogout')->name('session.logout');
Route::get('admin','Auth\AdminController@index')->name('admin.index');
Route::post('admin/login','Auth\AdminController@adminLogin')->name('admin.login');
Route::get('profauth/login','Auth\ProfauthController@index')->name('profauth.login');
Route::post('profauth/test','Auth\ProfauthController@professeurLogin')->name('profauth.test')->middleware('professeur');
Route::get('profauth/test','Auth\ProfauthController@professeurLogin')->name('profauth.test')->middleware('professeur');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('departement/import', 'departementController@import')->name('departement.import');
Route::post('etudiant/import', 'EtudiantController@import')->name('etudiant.import');
Route::post('filiere/import', 'FiliereController@import')->name('filiere.import');
Route::post('matiere/import', 'MatiereController@import')->name('matiere.import');
Route::post('module/import', 'ModuleController@import')->name('module.import');
Route::post('niveau/import', 'NiveauController@import')->name('niveau.import');
Route::post('professeur/import', 'ProfesseurController@import')->name('professeur.import');

Route::post('/profauth/test/random','question@RandomStoring');
Route::delete('/profauth/test/supprimer','TestController@destroy')->name('test.destroy');
Route::put('/profauth/test/modifier/{test_id}','TestController@update1');

Route::post('/reponses/note','ResultatController@storeFinal');
Route::put('profauth/reponses/note','ResultatController@update');
Route::post('resultat/note')->middleware('professeur');

Route::get('/welcome-professeur',function (){
    return view('welcome-professeur.welcome');
});
Route::get('/welcome-etudiant',function(){
    return view('welcome-etudiant.welcome');
});

Route::get('/manager-test/{prof_id}',function ($prof){
    $p = \App\Professeur::query()->where('professeur_id',$prof)->first();
    return view('profauth.test')->with('prof', $p);
})->name('manager-test')->middleware('professeur');

