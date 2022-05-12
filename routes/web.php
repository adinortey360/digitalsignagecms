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
    return redirect('/tv/player');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/queue', 'QueueController@index')->name('queue');
Route::get('/queue/accept/{code}', 'QueueController@accept')->name('accept_queue');
Route::get('/queue/attended_to/{code}', 'QueueController@attended_to')->name('attended_to_queue');
Route::post('/queue/add', 'QueueController@add')->name('add_queue');

Route::get('/present/slides', 'PresentController@slides')->name('slides');
Route::get('/present/slide/{id}', 'PresentController@slide')->name('slide');
Route::get('/present/slide/delete/{id}', 'PresentController@delete')->name('slide');
Route::get('/present', 'PresentController@index')->name('present');
Route::get('/present/frame', 'PresentController@frame')->name('present_frame');
Route::post('/slides/add/new/slide', 'PresentController@add');
Route::get('/present/templates', 'PresentController@templates')->name('templates');
Route::post('/present/templates/add', 'PresentController@installtemplate')->name('installtemplate');


Route::get('/store', 'StoreController@index')->name('store');
Route::post('/store/add', 'StoreController@add')->name('addstore');
Route::get('/store/remove/{id}', 'StoreController@remove')->name('removestore');

Route::get('/playerlinks', 'PlayerlinksController@index')->name('playerlinks');
Route::post('/playerlinks/add', 'PlayerlinksController@add')->name('addplayerlinks');
Route::get('/playerlinks/remove/{id}', 'PlayerlinksController@remove')->name('removeplayerlinks');


Route::get('/news', 'NewsController@index')->name('news');
Route::post('/news/add', 'NewsController@add')->name('addnews');

Route::get('/events', 'EventsController@index')->name('news');
Route::post('/event/add', 'EventsController@add')->name('news');

Route::get('/playlist', 'PlaylistController@index')->name('playlist');
Route::post('/playlist/add', 'PlaylistController@add')->name('addplaylist');
Route::get('/playlist/play/{id}', 'PlaylistController@play')->name('playplaylist');
Route::get('/playlist/remove/{id}', 'PlaylistController@remove')->name('removeplaylist');

Route::get('/direct', 'DirectController@index')->name('direct');

Route::get('/tv/player', 'TVController@player')->name('tvplayer');

Route::get('/tv/welcome', 'TVController@welcome')->name('tvwelcome');
Route::get('/tv/queue', 'TVController@queue')->name('tvpresent');
Route::get('/tv/events', 'TVController@events')->name('tvevents');
Route::get('/tv/present', 'TVController@present')->name('tvpresent');
Route::get('/tv/weather', 'TVController@weather')->name('tvweather');
Route::get('/tv/direct', 'TVController@direct')->name('tvdirect');
Route::get('/tv/menu', 'TVController@menu')->name('tvmenu');
Route::get('/tv/tips', 'TVController@tips')->name('tvtips');
Route::get('/tv/bankad', 'TVController@bankad')->name('bankslide');
Route::get('/tv/bankmagic', 'TVController@bankmagic')->name('bankmagic');
Route::get('/tv/milomagic', 'TVController@milomagic')->name('milomagic');
Route::get('/tv/familyfinances', 'TVController@familyfinances')->name('familyfinances');
Route::get('/tv/bankinter', 'TVController@bankinter')->name('bankinter');
Route::get('/tv/forex', 'TVController@forex')->name('forex');
Route::get('/tv/estate', 'TVController@estate')->name('estate');
Route::get('/tv/hotel', 'TVController@hotel')->name('hotel');
Route::get('/tv/nestlesplit', 'TVController@nestlesplit')->name('nestlesplit');
