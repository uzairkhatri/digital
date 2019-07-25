<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('check-queue', function () {
    \Illuminate\Support\Facades\Mail::to('uzairiqbal.gt@gmail.com')->send(new \App\Mail\TestMail());

    return 'working';
});


