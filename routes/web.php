<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/servicos', 'Pages.servicos')->name('servicos');
Route::view('/sobre', 'Pages.sobre')->name('sobre');
Route::view('/fale-conosco', 'Pages.fale-conosco')->name('fale-conosco');
Route::view('/empilhadeira', 'Pages.empilhadeira')->name('empilhadeira');
Route::view('/estoque', 'Pages.estoque')->name('estoque');
Route::view('/jardinagem', 'Pages.jardinagem')->name('jardinagem');
Route::view('/limpeza', 'Pages.limpeza')->name('limpeza');
Route::view('/piscineiro', 'Pages.piscineiro')->name('piscineiro');
Route::view('/recrutamento', 'Pages.recrutamento')->name('recrutamento');
Route::view('/terceirizacao', 'Pages.terceirizacao')->name('terceirizacao');
Route::view('/vigilante', 'Pages.vigilante')->name('vigilante');






