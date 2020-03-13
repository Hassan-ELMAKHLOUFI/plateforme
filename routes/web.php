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
    return view('welcome');
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
Route::resource('Resultat','ResultatController');
Route::get ('question/{test_id}','TestController@question');
Route::get ('result','ResultatController@test');
Route::get('test','TestController@index1');
Route::Resource('create-qcm','QCMController');
/*Route::get('/sessionUsers',function (){
    return Session::orderBy(DB::raw('RAND()'))->where('test_id','=',1)->take(5)->get();
});*/


Route::Resource('create-question','question');
Route::Resource('create-binaire','BinaireController');
Route::Post('create-binstore','BinaireController@store1');
Route::get('create-bin/{test_id}','BinaireController@index1');
Route::get('create-qcm1/{test_id}','QCMController@index2');
Route::get('create-qcm','QCMController@index1');
Route::get('select-question/{test_id}','question@select');
Route::Post('StoreSelected','question@StoreSelected');


Route::get('/session_pdf/{test}','TestController@export_pdf')->name('test.pdf');
Route::get('test/{s}','TestController@index1')->name('tests')->middleware('session');
Route::get('/session_pdf/{test}','TestController@export_pdf')->name('create-test.pdf');


Route::get('session','Auth\SessionController@index')->name('session.index');
Route::post('session/login','Auth\SessionController@sessionLogin')->name('session.login');
Route::get('session/logout','Auth\SessionController@sessionLogout')->name('session.logout')->middleware('session');
Route::get('admin','Auth\AdminController@index')->name('admin.index');
Route::post('admin/login','Auth\AdminController@adminLogin')->name('admin.login');
Route::get('admin/logout','Auth\AdminController@adminLogout')->name('admin.logout');
Route::get('profauth/login','Auth\ProfauthController@index')->name('profauth.login');
Route::post('profauth/test','Auth\ProfauthController@professeurLogin')->name('profauth.test');
Route::get('profauth/test','Auth\ProfauthController@professeurLogin')->name('profauth.test');
Route::get('profauth/logout','Auth\ProfauthController@professeurLogout')->name('profauth.logout')->middleware('professeur');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('departement/import', 'departementController@import')->name('departement.import');
Route::post('etudiant/import', 'EtudiantController@import')->name('etudiant.import');
Route::post('filiere/import', 'FiliereController@import')->name('filiere.import');
Route::post('matiere/import', 'MatiereController@import')->name('matiere.import');
Route::post('module/import', 'ModuleController@import')->name('module.import');
Route::post('niveau/import', 'NiveauController@import')->name('niveau.import');
Route::post('professeur/import', 'ProfesseurController@import')->name('professeur.import');
