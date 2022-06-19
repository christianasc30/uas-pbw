<?php
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});

route::group(['middleware'=> ['auth']], function() { 
Route::get('/home', function () {
    return view('home', ['cek' => 'home']);
});
route::get('/mahasiswa','mahasiswacontroller@mhs');
route::get('/mahasiswa/cari','mahasiswacontroller@cari');
route::get('/mahasiswa/formulirmahasiswa','mahasiswacontroller@formmahasiswa');
route::post('/mahasiswa/simpanmhs','mahasiswacontroller@simpanmhs');
route::get('/mahasiswa/editmahasiswa/{id}','mahasiswacontroller@editmahasiswa');
route::put('/mahasiswa/updatemahasiswa/{id}','mahasiswacontroller@updatemahasiswa');
route::get('/mahasiswa/hapusmahasiswa/{id}','mahasiswacontroller@hapusmahasiswa');



route::get('/dosen','dosencontroller@dosen');
route::get('/dosen/cari','dosencontroller@cari');
route::get('/dosen/formulirdosen','dosencontroller@formdosen');
route::post('/dosen/simpandosen','dosencontroller@simpandosen');
route::get('/dosen/editdosen/{id}','dosencontroller@editdosen');
route::put('/dosen/updatedosen/{id}','dosencontroller@updatedosen');
route::get('/dosen/hapusdosen/{id}','dosencontroller@hapusdosen');

route::get('/user','AuthController@user');
route::get('/user/formuliruser','AuthController@formuser');
route::post('/user/simpanuser','AuthController@simpanuser');
route::get('/user/edituser/{id}','Authcontroller@edituser');
route::put('/user/updateuser/{id}','Authcontroller@updateuser');
route::get('/user/hapususer/{id}','Authcontroller@hapususer');
route::get('/logout','AuthController@logout');
});




route::get('/','AuthController@login')->middleware('guest')->name('login');
route::post('/user/ceklogin','AuthController@ceklogin')->middleware('guest');


