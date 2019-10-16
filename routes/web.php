<?php
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController2@indexfront');
Route::get('/capaian', 'HomeController2@capaian')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ipkikm', 'HomeController@ipkikm')->name('home');
Route::post('/ipkikm/update', 'HomeController@ipkikminsert')->name('home');
Route::get('download-ipkikm/{id_file}', 'HomeController@downloadIpk');
Route::get('download-acplan/{id_file}', 'HomeController@downloadAcplan');
Route::get('/viewdownload', 'HomeController@viewDownload');

Route::get('/downloadmanual', 'HomeController@downloadManual');
Route::get('/downloadsop', 'HomeController@downloadSop');


Route::get('/status', 'HomeController@status')->name('home');

Route::get('/video', 'HomeController@video')->name('home');
Route::post('/video/update', 'HomeController@updatevideo')->name('home');

Route::get('/acplan', 'HomeController@acplan')->name('home');
Route::post('/acplan/update', 'HomeController@acplaninsert')->name('home');

Route::get('/video', 'HomeController@video')->name('home');
Route::get('/acplan', 'HomeController@acplan')->name('home');
Route::get('/verifipkikm', 'HomeController@verifipkikm')->name('home');
Route::get('/verifacplan', 'HomeController@verifacplan')->name('home');

Route::get('/pimti', 'HomeController@pimti')->name('home');
Route::get('/verifikasi2', 'HomeController@verifikasi2')->name('home');
Route::post('verifikasi/update','HomeController@updateverif');
Route::get('/verifikasi/{id_transaksi}', 'HomeController@verifikasi')->name('home');
Route::get('/perubahan', 'HomeController@perubahan')->name('home');
Route::group(['prefix' => 'perubahan', 'middleware' => 'auth'], function(){
	Route::post('upload', 'HomeController@store');
	Route::post('delete', 'HomeController@hapus');

});

Route::get('/pertanyaan2', 'HomeController@pertanyaan2')->name('home');
Route::group(['prefix' => 'pertanyaan2', 'middleware' => 'auth'], function(){
	Route::get('notifikasi/{id_transaksi}', 'HomeController@notifikasi');

	Route::get('kategori/{id_kategori}', 'HomeController@subindikator');
	Route::get('download-file/{id_file}', 'HomeController@downloadFile');
	Route::get('download-dakung/{id_dakung}', 'HomeController@downloadDakung');
	Route::get('download-fileverif/{id_file}', 'HomeController@downloadFileVerif');


});





// Route::get('/', function () {
//     return view('welcome');
// });

