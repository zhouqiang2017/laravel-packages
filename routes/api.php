<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::middleware('client.credentials')->get();
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('/todos', function(){
    $todos = \App\Todo::all();
    return response()->json($todos);
})->middleware('cors','api');

Route::get('/todo/{id}', function($id){
    $todos = \App\Todo::find($id);
    return response()->json($todos);
})->middleware('cors','api');

Route::post('/todo/create', function(Request $request){
    $data = [
        'text' => $request->get('text'),
        'completed' => 0
    ];
    $todo = \App\Todo::forceCreate($data);
    return $todo;
})->middleware('cors','api');

Route::delete('/todo/{id}/delete', function ($id){
    $todo = \App\Todo::find($id);
    $todo->delete();
    return response()->json(['deleted']);
})->middleware('cors', 'api');

Route::patch('/todo/{id}/completed', function ($id){
    $todo = \App\Todo::find($id);
    $todo->completed = ! $todo->completed;
    $todo->save();
    return $todo;
})->middleware('cors', 'api');
