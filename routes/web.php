<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TestComtroller;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use NunoMaduro\Collision\Adapters\Laravel\Commands\TestCommand;
use PhpParser\Node\Stmt\Return_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/*Route::get('/', function () {
    return '<h1>ISPr2-22</h1>';
});
Route::get('/post/{id}', function ($id) {
    return "<h1> post $id </h1>";
});*/

Route::middleware(['guest'])->group(function(){
    Route::get('/register', [UserController::class, 'create'])->name('user.create');
    Route::post('/register', [UserController::class, 'store'])->name('user.store');
    
    Route::get('/login', [UserController::class, 'loginCreate'])->name('login.create');
    Route::post('/login', [UserController::class, 'loginStore'])->name('login.store');
    
    });

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'show'])->name('about');

Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'admin'], function(){
    Route::get('/post/create', [HomeController::class, 'create'])->name('post.create')->middleware('admin');
    Route::post('/post', [HomeController::class, 'store'])->name('post.store');
});
    Route::get('/main', [MainController::class, 'index'])->name('main.index');
    Route::post('/main', [MainController::class, 'index1'])->name('main.index1');

Route::get('/practice', [HomeController::class, 'practiceW'])->name('practice');


Route::get('/enter', [EnterController::class, 'start'])->name('enter.enter');
Route::post('/enter', [EnterController::class, 'end'])->name('enter.end');


Route::get('/test', [TestComtroller::class, 'index'])->name('test.test');
Route::post('/test', [TestComtroller::class, 'one'])->name('test.one');

Route::get('/test2', [TestComtroller::class, 'index3'])->name('test.test2');
Route::post('/test2', [TestComtroller::class, 'fore'])->name('test.fore');

Route::get('/stop', [TestComtroller::class, 'index1'])->name('test.stop');
Route::post('/stop', [TestComtroller::class, 'two'])->name('test.two');

Route::get('/stop2', [TestComtroller::class, 'index2'])->name('test.stop2');
Route::post('/stop2', [TestComtroller::class, 'three'])->name('test.three');

Route::get('/stop3', [TestComtroller::class, 'index4'])->name('test.stop3');
Route::post('/stop3', [TestComtroller::class, 'five'])->name('test.five');

Route::get('/bithday', [HomeController::class, 'bithday'])->name('bithday.bithday');
Route::post('/bithday', [HomeController::class, 'day'])->name('bithday.day');

Route::get('/sendd', [ContactController::class, 'sendd']);

Route::get('/hello', function(){
    return view('welcome');
})->name('welcome');


//Route::resource('/posts', PostController::class);
//Route::apiResource('posts', PostController::class);
Route::get('/table', [TableController::class, 'index']);
/*

Route::get('/post/{id}/{slug}', function ($id, $slug) {
    return "<h1> post $id | $slug </h1>";
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z]']);

Route::get('/home', function () {
    $res = 2+3;
    $name = 'Name';
    return view('home', compact('res','name'));
});

Route::match(['post', 'get'], '/contact1', function() {
    if (!empty($_POST)){
        dump($_POST);
    }
    return view('contact') ;
})-> name('isp2');

Route::get('/Wposts', function(){
    return 'Posts List';
});
Route::prefix('admin')->group(function(){
    Route::get('/Wposts', function(){
        return 'Posts List';
    });

    Route::get('/Wposts/create', function(){
        return 'Posts Create';
    });

    Route::get('/Wposts/{id}/edit', function($id){
        return "Edit Post $id";
    });
});

Route::fallback(function(){
    //return redirect()->route('welcome');
    abort(404,'Page not fount');
});

Route::get('/user/{id}',function($id){
    return "<h1> $id </h1>";
})->where(['id' => '[0-9]+']);

Route::get('/user/{id}/name',function($id, $name){
    return "<h1> $id | $name </h1>";
})->where(['id' => '[0-9]+', 'name' => '[a-z]2']);

*/

//Route::redirect('/contact1', 'home', 301);

//Route::get('/contact', function(){
//    return view('contact');
//});

/*Route::get('/sent', function(){
    return '<h1> SENT </h1>';
});

Route::get('/sent', function(){
    if (!empty($_POST)){
        dump($_POST);
    }
    return '<h1> SENT </h1>';
});*/

