<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
Route::get('/name', [MyController::class, 'My_data']);
Route::post('/name', [MyController::class, 'Submit']);
// Route::get('test0', [MyController::class,'My_data']);



// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('sarah/{id?}', function ($id=0) {
//     return 'Welcome to the website, id: ' . $id;
// })->whereNumber('id');
// //  where(['id' => '[0-9]+']);

// Route::get('course/{name}', function ($name){
//     return 'My name is: ' . $name;
// })->whereIn('name', ['Sarah','Amira','Hagar']);
// // whereAlpha('name');

// Route::prefix('cars')->group(function(){
//     Route::get('bmw', function(){
//         return 'Category is BMW';3
//         3+
//     });
//     Route::get('mercedes', function(){
//         return 'Category is Mercedes';
//     });
// });

// // Route::fallback(function(){
//     // return 'Required is not found';
//     // return redirect('/');
// // });

// // Route::get('test0', function(){
// //     return view('test');
// // });

// Route::get('form1', function(){
//     return view('form1');
// });

// Route::post('recForm', function(){
//     return 'Data is recieved';
// })->name('recieveForm1');

// // Route::get('data', function(){
// //     return view('recForm', compact('fname','lname'));
// // });