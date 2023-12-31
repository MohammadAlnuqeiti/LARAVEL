<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IdNumberController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

//لحتى ما اكرر اسم الكنترولر في كل راوت فبحطهم داخل جروب
Route::controller(PostController::class)->group(function(){

    Route::get('/post/read', 'read')->name('read'); // هذا بعرض البيانات الموجودة في الداتا بيس
    Route::get('/post/create', 'create')->name('post');  //insert بعرض الصفحة اللي فيها الفورم اللى باخذ من خلالها البيانات والفورم بعمل اكشن للراوت ال
    Route::post('/post/insert', 'insert')->name('insert');// بحولني على الكنترولر اللي من خلاله بحفظ بالداتا بيس وبرجعني على نفس الصفحة اللي فيها الفورم
    Route::post('/post/update/{id}','update_data')->name('edit.data');//اللي بعرض البيانات read وبحولني على راوت ال  id  هذد بحولني على كنترولر من خلاله بحفظ التعديلات في الداتا بيس حسب ال
    Route::get('/post/delete/{id}','delete')->name('post.delete'); // url من   id  هذا بحولني على كنترولر من خلاله بحذف مستخدم او بوست حسب ال
    Route::get('/post/delete','deleteAll')->name('posts.deleteAll');
    Route::get('/post/truncate','deleteTruncate')->name('posts.truncate');
    Route::get('/post/show','show')->name('posts.show');
});

//-------------------model & controller resources

Route::resource('comments',CommentController::class);
Route::get('comments/restore/{id}',[CommentController::class,'restore'])->name('comments.restore');
Route::get('comments/forcedelete/{id}',[CommentController::class,'forcedelete'])->name('comments.delete');
Route::get('comments/trushed/{id}',[CommentController::class,'trushed'])->name('comments.trushed');


//------------------------------------ movie controller


Route::resource('movies',MovieController::class);


//------------------------------------ relation

Route::get('users',[IdNumberController::class,'index']);

//------------------------------------ user controller


// Route::get('login',[UserController::class,'login'])->name('login');
Route::get('register',[UserController::class,'register']);
Route::get('/store',[UserController::class,'store'])->name('user.store');


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/login/read',[LoginController::class,'read'])->name('read');

