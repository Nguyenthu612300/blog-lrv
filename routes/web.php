<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/admin', function () {
    return view('admin');
}) ->name('admin') ;


Route::group(['middleware' =>['auth','is_admin']] ,function(){
    Route::get('/admin', function () {
        return view('admin');
    }) ->name('admin') ;
    
});


// /Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');

// Route::get('/xin-chao', function(){
//     return 'xin chao';
// });
// Route::get('/xin-chao/{ten}/{namsinh}', function($ten, $namsinh){
//     return 'xin chào bạn ' . $ten . '<br>Có năm sinh là: '. $namsinh;
// });
// Route::get('/xin-chao/{ten}/{tuoi}', function($ten, $namsinh){
//     return 'xin chào bạn ' . $ten . '<br>Có năm sinh là: ' . $namsinh;
// })->where(['ten' => '[a-z]+', 'tuoi' => '[0-9]+']);
// Route::get('/xin-chao/{ten}/{namsinh}', [MyController::class,'getxinchao']);
// Route::get('/categories.html', [CategoryController::class,'getCategories']);

// Route::get('/posts.html', [PostController::class,'getPosts()']);
// Route::get('/chao/{user}', function($user){
//     return view('hello-user',['user'=>$user]);
// });
// Route::get('chao/{name}/{age}', function($name, $age){


//     return view('hello-user', compact('name' , 'age'));
// });
// Route::get('chao/{user}', function($user){
//     return view('hello-user')-> with('user',$user);
// });
//Route::get('/listcategories', [CategoryController::class,'getCategories']);
//Route::get('/listposts', [PostController::class,'getPosts']);
// Route::get('/', [PageController::class,'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/categories', CategoryController::class);
Route::resource('/posts', PostController::class);


