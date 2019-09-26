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

use App\TestLog;

//Route::get('/', function () {
    //return view('welcome');
//});


//Route::get('/', function () {
    //return view('template') ->with('description', 'Moderna - Главная страница')
       //->with('title','Moderna - Главная страница');
//});

//Route::get('/{page}', function ($page) {
    //$data = array('description' => 'Moderna - ' . $page,
        //'title' => 'Moderna - ' . $page);
    //return view($page, $data);
//});



Route::get('/', 'MainController@index');

Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/about/{id}', 'AboutController@show')->name('about.show');
Route::post('/about/{id}/delete', 'AboutController@delete')->name('about.delete');

Route::get('/portfolio', 'PortfolioController@index');
Route::get('/resume', 'ResumeController@index');
Route::get('/services', 'ServicesController@index');
Route::get('/contact', 'ContactController@index');
//Route::post('/contact', 'ContactController@mailsend')->name('contact.mailsend');

Route::post('/sendEmail', 'Ajax\ContactController@send');





//Rote:: group(['namespace'=>'Blog', 'prefix'=>'blog'],function()
//{
//    Route::resource('posts' , 'PostController')->names('blog.posts');
//});

//получить все записи
//$flights = App\TestLog::all();
//foreach ($flights as $flight) {
    //echo $flight->email, '<br>';
//}

  // $flight = App\TestLog::find(1);
   //echo $flight;

//выборка инфы
//$users = App\TestLog::where('id', '<', 100)->take(1)->get();

//foreach ($users as $user)
//{
    //var_dump($user->email);
//}

//агрегатные функции
//$count = App\TestLog::where('id', '<', 100)->count();
//var_dump($count);

//добавление новых полей в бд
//$user = App\TestLog::create(['name' => 'John', 'email'=>'mmmk']);

//если нет такого пользователя создать
//$user = App\TestLog::firstOrCreate(['name' => 'Jyyyy', 'email'=>'mmmkkkkss']);


//Обновление полученной модели
//$user = App\TestLog::find(6);
//$user->email = 'john@oo.com';
//$user->save();

//удаление модели в бд
//$user = App\TestLog::find(7);
//$user->delete();


