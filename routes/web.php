<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


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


// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/home',['as'=>'home',   'uses'=>'DashboardController@dashboard']);
// Route::get('/home','DashboardController@dashboard')->name('dashboard');
Route::get('/', [DashboardController::class, 'welcome']);
Route::get('/banco', [DashboardController::class, 'banco'])->name('banco');
Route::get('/popular', [DashboardController::class, 'popular']);
Route::get('mes/{mes}-{ano}/',[DashboardController::class, 'mes'])->name('mes');
Route::post('/relatorio',[DashboardController::class, 'relatorioPost'])->name('relatorioPost');
Route::get('/relatorio-gerados',[DashboardController::class, 'relatorioGerados'])->name('geradas');
Route::get('/relatorio',[DashboardController::class, 'relatorioGet'])->name('relatorioGet');
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
Route::post('/relatorio-update-{id}-{tipo}',[DashboardController::class, 'relatorioUpdate'])->name('relatorioUpdate');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });


// Route::post('/dashboard/weekly','DashboardController@mapsDate')->name('dashboardDate.weekly');
// Route::get('/dashboard/weekly','DashboardController@maps')->name('dashboard.weekly');
// Route::post('/getPrevsContent','DashboardController@getPrevsContent')->name('getPrevsContent');
// Route::post('/getAffluenceContent','DashboardController@getAffluenceContent')->name('getAffluenceContent');
// Route::get('/dashboard/insights','DashboardController@insights')->name('dashboardInsights');
// Route::get('/dashboard/official','DashboardController@official')->name('dashboardOfficial');

// //Reports
// Route::get('reports/',['as'=>'reports.index',   'uses'=>'ReportsController@index']);

// //File
// Route::post('files/{uuid}',['as'=>'files.download', 'uses'=>'DashboardController@downloadFile']);

// //Users
// Route::get('users/{user}',['as'=>'users.show','uses'=>'UserController@show']);
// Route::get('users/{user}/edit',['as'=>'users.edit','uses'=>'UserController@edit']);
// Route::post('users/{user}',['as'=>'users.update',  'uses'=>'UserController@update']);
// Route::get('users/{id}/destroy',['as'=>'users.destroy', 'uses'=>'UserController@destroy']);
// Route::get('users/api/{user}',['as'=>'users.api','uses'=>'UserController@api']);
// Route::get('users/avatar/save', 'UserController@saveAvatar');
