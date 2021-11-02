<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});

// ROUTING BARU
Route::get('/zdarks', function () {
    echo "Hello Zdarks";
});

// DENGAN PARAMETER
Route::get('/name/{name}', function ($name) {
    return "Hello " . $name;
});

// DEFAULT PARAMETER
Route::get('/data/{data?}', function ($data = "Kosong") {
    return "Isi Parameter = " . $data;
});

// REGULAR EXPRESSION
Route::get('/name/{name}', function ($name) {
    return "Hello " . $name;
})->where('name', '[A-Za-z]+');

// STUDI KASUS NUMERIC dan ABJAD
Route::get('/{nrp}/{nama}', function ($nrp, $nama) {
    return "Hallo " . $nrp . " " . $nama;
})->where('nrp', '[0-9]+')->where('nama', '[A-Za-z]+');

// STUDI KASUS NUMERIC dan ABJAD Versi 2
Route::get('/00/{nrp}/{nama}', function ($nrp, $nama) {
    return "Hallo " . $nrp . " " . $nama;
})->where([
    'nrp' => '[0-9]+',
    'nama' => '[A-Za-z]+',
]);

// STUDI KASUS BILANGAN
Route::get('/cekbilangan/{bilangan}', function ($bilangan) {
    if ($bilangan % 2 == 0) {
        return "Bilangan tersebut Genap";
    } else {
        return "Bilangan tersebut Ganjil";
    }
});

// STUDI KASUS DERET BILANGAN
Route::get('/deretbilangan/{deret}', function ($deret) {
    return "deret";
});

// STUDI KASUS CONTROLER NAME
Route::get('/person', [PersonController::class, 'index']);

// STUDI KASUS CONTROLER PARAM
Route::get('/person/show/{param}', [PersonController::class, 'show']);

// STUDI KASUS CONTROLLER STUDENT
Route::resource('/student', StudentController::class);
