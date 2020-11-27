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
     return view('welcome');
});


//Route::get('/home', 'HomeController1@home1');

Route::get('/about', 'AboutController@about');

//Route::get('/articles/{id}', 'ArticleController@article');

Route::get('/master', 'MasterController@master');

Route::get('/idx', 'HomeController1@homeIdx');
Route::get('/post', 'HomeController1@post');

//Route::get('/home', 'HomeController1@getAll');
Route::get('/articles/{id}', 'HomeController1@getById');

//KUIS 1
Route::get('/KuisHome', 'Kuis1Controller@KuisHome');
Route::get('/KuisArticle{id}', 'Kuis1Controller@KuisArticle');
Route::get('/about', 'Kuis1Controller@KuisAbout')->name('about');
Route::get('/contact', 'Kuis1Controller@KuisContact')->name('contact');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//UTS (ORM)
Route::get('/manage', 'ArticleController@index')->name('manage');

Route::get('/article/add','ArticleController@add');
Route::post('/article/create','ArticleController@create');

Route::get('/article/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update');

Route::get('/article/delete/{id}','ArticleController@delete');

Route::post('/reaction/create','ReactionController@create');
Route::get('/reaction/delete/{id}','ReactionController@delete');

Route::get('/article/cetak_pdf', 'ArticleController@cetak_pdf');
Route::get('/reaction/cetak_pdf', 'ReactionController@cetak_pdf');

Route::get('/manageUser', 'UserController@index')->name('manageUser');
Route::get('/user/cetak_pdf', 'UserController@cetak_pdf');
Route::get('/user/delete/{id}', 'UserController@delete');
Route::get('/user/edit/{id}', 'UserController@pp');
Route::post('/user/update/{id}','UserController@update');



