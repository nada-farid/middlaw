<?php
 use Illuminate\Support\Facades\Route;
 
Route::as('frontend.')->namespace('App\Http\Controllers\Frontend')->group(function () {
   Route::get('/', 'HomeController@index')->name('home');
   Route::get('/about', 'HomeController@about')->name('about');
   Route::get('/services', 'ServicesController@index')->name('services');
   Route::get('/services/{slug}', 'ServicesController@show')->name('service.show');
   Route::get('/news', 'NewsController@index')->name('news');
   Route::get('/news/{slug}', 'NewsController@show')->name('news.show');
   Route::get('/contact', 'ContactController@contact')->name('contact');
   Route::post('/contact', 'ContactController@store')->name('contact.store');
   Route::get('/employment', 'HomeController@employment')->name('employment');
   Route::post('/employment', 'HomeController@storeEmployment')->name('employment.store');
   Route::get('/partners', 'HomeController@partners')->name('partners');
   Route::get('/blogs', 'BlogController@index')->name('blogs');
   Route::get('/blogs/{slug}', 'BlogController@show')->name('blog.show');
   
});
