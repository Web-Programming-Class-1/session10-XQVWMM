<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', function(){
    $lang = request('lang', 'id');
    App::setLocale($lang);

    return view('product', ['lang' => $lang]);
})->name('product');

Route::get('/{locale}/product', function($locale){
    $locale = request('locale');
    App::setLocale($locale);

    return view('product');
})->name('locale-product');


Route::get('courses', function () {
    $lang = request('lang', config('app.locale')); // gunakan default Laravel jika tidak ada
    return redirect()->route('courses', ['lang' => $lang]);
});

Route::get('{lang}/courses', [CoursesController::class, 'index'])
    ->name('courses');