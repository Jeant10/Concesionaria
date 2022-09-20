<?php

use Illuminate\Support\Facades\Route;


// PASO 5
Route::get('/', function () {
    return View('home');
})->name('home');
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::view('nosotros','nosotros')->name('about');
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::view('personal','personal')->name('personal');
Route::get('modelos',function()
{
    $autos =
    [
        "CHEVROLET"=>'TRACKER',
        "MAZDA"=>'323',
        "FORD"=>'RANGER',
        "KIA"=>'SPORTAGE',
        "GREAT WALL"=>'WINGLE'
    ];
    $nombre = "Byron";
    return view('modelos',compact('autos','nombre'));
})->name('models');
// PASAR PARAMETROS A LA ROUTE
Route::get('contactos/{name?}',function($name='Invitado')
{
    return view('contactos',compact('name'));
})->name('contact');