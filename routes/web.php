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



Route::prefix('')->group(function() {
    Route::get('/', function() {
        return view('home.index', [
            "title" => "Home",    
        ]);
    })->name('home.index');

    
    Route::get('/lecturer', function() {
        $lecturers = ["Adhi Rizal, MT.", "Aji Primajaya, S.Si., M.Kom.", "Arip Solehudin, M.Kom.", 
                    "Betha Nurina Sari, M.Kom.", "Garno, M.Kom.", "Iqbal Maulana, S.Si., M.Sc.",
                    "Ratna Mufidah, M.Kom.", "Rini Mayasari, M.Kom.", "Purwantoro, M.Kom.", "Sisca, M.Kom."];
        return view('lecturer.index', [
            "title" => "Dosen",
            'lecturers' => $lecturers
        ]);
    })->name('lecturer.index');

    Route::get('/student', function() {
        $students = ["Adbul", "Bagus", "Caroline", "Dimas", "Esme", "Fiona",
                    "Geri", "Haris", "Idris", "July"];
        return view('student.index', [
            "title" => "Mahasiswa",
            'students' => $students
        ]);
    })->name('student.index');

    Route::get('/matakuliah', function() {
        $matakuliahs = ["Algoritma Pemrograman", "Basis Data", "Rekayasa Perangkat Lunak", 
                        "Framework Pemrograman Web", "Technopreuner", "Pemrograman Berbasis Website",
                        "Pemrograman Berbasis Android", "Cloud Computing", "Data Mining", "Blockchain"];
        return view('matakuliah.index', [
            "title" => "Mata Kuliah",
            'matakuliahs' => $matakuliahs
        ]);
    })->name('matakuliah.index');

});
