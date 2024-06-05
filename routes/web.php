<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StudentController;

Route::post('insertStudent', [StudentController::class, 'store'])->name('insertStudent');
Route::get('addstudent', [StudentController::class, 'create'])->name('addstudent');
Route::get('students',[StudentController::class,'index'])->name('students');
Route::get('editStudent/{id}',[StudentController::class,'edit'])->name('editStudent');
Route::put('updateStudent/{id}',[StudentController::class,'update'])->name('updateStudent');
Route::get('showStudent/{id}',[StudentController::class,'show'])->name('showStudent');
Route::delete('deleteStudent',[StudentController::class,'destroy'])->name('deleteStudent');
Route::get('trashStudent',[StudentController::class,'trash'])->name('trashStudent');
Route::delete('forceDelete',[StudentController::class,'forceDelete'])->name('forceDelete');
Route::get('restoreStudent/{id}',[StudentController::class,'restore'])->name('restoreStudent');
// Route::post('formResult',[StudentController::class,'store'])->name('StuResult');

Route::post('insertClient', [ClientController::class,'store'])->name('insertClient');
Route::get('addClient',[ClientController::class,'create'])->name('addClient');
Route::get('clients',[ClientController::class,'index'])->name('clients');
Route::get('editClient/{id}',[ClientController::class,'edit'])->name('editClient');
Route::put('updateClient/{id}',[ClientController::class,'update'])->name('updateClient');
Route::get('showClient/{id}',[ClientController::class,'show'])->name('showClient');
Route::delete('deleteClient',[ClientController::class,'destroy'])->name('deleteClient');
Route::get('trashClient',[ClientController::class,'trash'])->name('trashClient');
Route::delete('forceDelete',[ClientController::class,'forceDelete'])->name('forceDelete');
Route::get('restoreClient/{id}',[ClientController::class,'restore'])->name('restoreClient');
// Route::get('clients',[ClientController::class,'index'])->name('clients');
// Route::post('formResult',[ClientController::class,'store'])->name('formResult');
// Route::get('form1',[ClientController::class,'create'])->name('formSubmit');

Route::get('/name', [MyController::class, 'My_data']);
Route::post('/name', [MyController::class, 'Submit']);
// Route::get('test0', [MyController::class,'My_data']);



Route::get('/', function () {
    return view('stacked');
});


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