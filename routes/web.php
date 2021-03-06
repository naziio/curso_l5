
<?php
Route::get('/', function () {
    return 'Home';
})->name('welcome');
Route::get('/usuarios', 'UserController@index')->name('usuarios');
Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+');
Route::get('/usuarios/nuevo', 'UserController@create');
Route::get('/saludo/{name}/{nickname}', 'WelcomeUserController@index');
Route::get('/saludo/{name}', 'WelcomeUserController@withoutNickname');
Route::get('/usuarios/{id}/edit', 'UserController@edit')->where('id', '[0-9]+');