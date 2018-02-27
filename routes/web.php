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
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contact', function () {

    $data = request()->all();
    echo "email: " . $data['email'] . '<br>';
    echo "subject: " . $data['subject'] . '<br>';
    echo "body: " . $data['body'];

});
Route::get('/SignIn', function () {
    return view('pages.SignIn');
})->name('SignIn');
Route::post('/SignIn', function () {

    $data = request()->all();
    echo "username: " . $data['username'] . '<br>';
    echo "password: " . $data['password'];
});

Route::get('/Signup', function () {
    return view('pages.Signup');
})->name('Signup');

    Route::post('/Signup', function () {

        $data = request()->all();
        echo "name: " . $data['name'] . '<br>';
        echo "email: " . $data['email'] . '<br>';
        echo "password: " . $data['password'] . '<br>';
        echo "password: " . $data['password'];
    });


Route::get('/logout', function () {
    return view('pages.logout');
})->name('logout');

Route::get('/viewmessages', function () {
    return view('pages.viewmessages');
})->name('viewmessages');

Route::get('/airlinetickets', function () {
    return view('pages.airlinetickets');
});

Route::get('/classschedule', function () {
    return view('pages.classschedule');
});
