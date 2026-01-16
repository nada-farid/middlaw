<?php
 use Illuminate\Support\Facades\Route;
 
Route::as('frontend.')->namespace('App\Http\Controllers\Frontend')->group(function () {
   Route::get('/', 'HomeController@index')->name('home');
   Route::get('/about', 'HomeController@about')->name('about');
   Route::get('/services', 'HomeController@services')->name('services');
   Route::get('/services/{slug}', 'HomeController@serviceShow')->name('service.show');
   Route::get('/news', 'HomeController@news')->name('news');
   Route::get('/news/{slug}', 'HomeController@newsShow')->name('news.show');
   Route::get('/blog', 'HomeController@blog')->name('blog');
   Route::get('/blog/{slug}', 'HomeController@blogShow')->name('blog.show');
   Route::get('/contact', 'HomeController@contact')->name('contact');
   Route::post('/contact', 'HomeController@storeContact')->name('contact.store');
   Route::get('/jobs', 'HomeController@jobs')->name('jobs');
   Route::get('/partners', 'HomeController@partners')->name('partners');
   
});
