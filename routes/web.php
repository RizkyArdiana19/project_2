<?php

use App\Models\Gejala;
use App\Models\KondisiUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HasilAnalisis;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserProfileController;
use App\Http\Middleware\VerifyUserVerification;
use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\TingkatDepresiController;
use App\Http\Controllers\ProfileMahasiswaController;
use App\Http\Controllers\VerificationController;

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
    return view('home');
});

// routes/web.php

Route::get('/admin/belum-verifikasi', function () {
    return view('admin.belum-verifikasi');
})->name('admin.belum-verifikasi');


Route::get('/register', [RegisterController::class, 'create'])->name('register.create')->middleware('guest');
Route::post('/register', [RegisterController::class, 'actionregister'])->name('register.action');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::get('/login-new', [LoginController::class, 'login_new']);
Route::post('/login', [LoginController::class, 'actionlogin'])->name('credentials');
Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

//Admin
Route::middleware(['auth', VerifyUserVerification::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::resource('/dashboardadmin', AdminController::class);
    Route::resource('/datamahasiswa', DataMahasiswaController::class);
    Route::resource('/Profile', ProfileController::class);
    Route::resource('/profilemahasiswa', ProfileMahasiswaController::class);
    Route::post('/aktifkan-akun/{id}', [DataMahasiswaController::class, 'aktifkanAkun'])->name('aktifkan.akun');
    Route::delete('/mahasiswa/{id}', [DataMahasiswaController::class, 'hapus'])->name('hapus.mahasiswa');
    Route::post('/nonaktifkan/{id}', [DataMahasiswaController::class, 'nonaktifkan'])->name('nonaktifkan.akun');
});

//User
Route::middleware(['auth', VerifyUserVerification::class])->group(function () {
    Route::get('/user', [UserController::class, 'index']);
});


//user
Route::get('/ToDoList', [TodoController::class, 'index']);
Route::post('/ToDoList', [TodoController::class, 'store']);
Route::patch('/{todo}', [TodoController::class, 'update']);
Route::delete('/{todo}', [TodoController::class, 'destroy']);

//user
Route::resource('kuesioner', DiagnosaController::class);
Route::resource('/gejala', GejalaController::class);
Route::resource('/depresi', TingkatDepresiController::class);
Route::resource('/spk', DiagnosaController::class)->only('index');
Route::resource('/spk', DiagnosaController::class);
Route::get('/spk/result/{diagnosa_id}', [DiagnosaController::class, 'diagnosaResult'])->name('spk.result');

Route::get('/form', function () {
    $data = [
        'gejala' => Gejala::all(),
        'kondisi_user' => KondisiUser::all()
    ];
    return view('form', $data);
});

Route::get('/form-faq', function () {
    $data = [
        'gejala' => Gejala::all(),
        'kondisi_user' => KondisiUser::all()
    ];

    return view('faq', $data);
})->name('cl.form');

Route::resource('/hasilanalisis', HasilAnalisis::class);

//Superadmin
Route::get('/superadmin', [SuperAdminController::class, 'index'])->middleware('auth');
Route::resource('/dashboardsuperadmin', SuperAdminController::class);
Route::resource('/dataadmin', DataAdminController::class);
Route::resource('UserProfile', UserProfileController::class);



