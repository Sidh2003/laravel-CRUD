
<?php

use App\Http\Controllers\userController; //import this
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/users', [UserController::class, 'loadAllUsers']);
Route::get('/   ', [UserController::class, 'loadAddUserForm']);

Route::post('/', [UserController::class, 'AddUser'])->name('AddUser');

Route::get('/edit/{id}', [UserController::class, 'loadEditForm']);
Route::get('/delete/{id}', [UserController::class, 'deleteUser']);

Route::post('/edit/user', [UserController::class, 'EditUser'])->name('EditUser');
