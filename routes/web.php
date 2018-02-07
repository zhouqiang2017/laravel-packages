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
Auth::loginUsingId(23);
Route::get('/', function () {
//    $todo = \App\Todo::find(2);
//    Auth::user()->notify(new \App\Notifications\UserSubscribe());//邮件通知 notifications
//    Mail::to($user->email)->send(new \App\Mail\UserWelcome($user)); //发送邮件
    return view('welcome');
});

Route::get('/notifications',function (){
   return view('notifications');
});
Route::delete('/user/notification',function (){
    Auth::user()->notifications->markAsRead();
    return redirect()->back();
});

Route::get('/todos', function () {
    $todos = \App\Todo::paginate(5);
    return view('todos',compact('todos'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/captcha/{config}', function (\Mews\Captcha\Captcha $captcha, $config='default'){
    return $captcha->create($config);
});
Route::get('/ueditor', function (){
    return view('ueditor');
});
Route::get('/mail', function () {
    return new App\Mail\UserWelcome();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
