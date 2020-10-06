<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use ArielMejiaDev\LarapexCharts\LarapexChart;

use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Post\ListPostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Jadwal\JadwalController;
use App\Http\Controllers\Danadesa\DanadesaController;
use App\Http\Controllers\Laporan\LaporanController;



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

// Route::get('/', function () {
//     Alert::success('Success Title', 'Success Message');
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\WelcomeController::class, 'index']);
Route::post('cfg_laporan',[App\Http\Controllers\WelcomeController::class, 'store']);
Route::get('cfg_thanks',[App\Http\Controllers\WelcomeController::class, 'thanks']);
Route::get('cfg_show/{id}',[App\Http\Controllers\WelcomeController::class, 'show']);
Route::get('news',[App\Http\Controllers\WelcomeController::class, 'allnews']);
Route::get('cfg_dana',[App\Http\Controllers\WelcomeController::class, 'danadesa']);
Route::get('profile',[App\Http\Controllers\WelcomeController::class, 'profile']);

Route::get('download/{filename}',[DanadesaController::class,'getDownload']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::resource('posting',PostController::class);
    Route::resource('jadwal',JadwalController::class);
    Route::resource('postingan',ListPostController::class);
    Route::resource('desa',DanadesaController::class);
    Route::resource('laporan',LaporanController::class);
    Route::get('/search',[LaporanController::class,'search']);
});
