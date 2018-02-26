<?php

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
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {

    $data = request()->all();
    echo "email: " . $data['email'] . '<br>';
    echo "subject: " . $data['subject'] . '<br>';
    echo "body: " . $data['body'];

});
Route::get('/SignIn', function () {
    return view('pages.SignIn');
});
Route::post('/SignIn', function () {

    $data = request()->all();
    echo "username: " . $data['username'] . '<br>';
    echo "password: " . $data['password'];
});

Route::get('/Signup', function () {
    return view('pages.Signup');
});

    Route::post('/Signup', function () {

        $data = request()->all();
        echo "name: " . $data['name'] . '<br>';
        echo "email: " . $data['email'] . '<br>';
        echo "password: " . $data['password'] . '<br>';
        echo "password: " . $data['password'];
    });


Route::get('/logout', function () {
    return view('pages.logout');
});

Route::get('/view messages', function () {
    return view('pages.view messages');
});