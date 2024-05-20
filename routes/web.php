<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/porfolio', [PagesController::class, 'porfolio']);
Route::get('/posts', [PostsController::class, 'index']);

Route::resource('/foods', FoodsController::class); //php artisan route:list
// Route::get('/products', [
//     ProductsController::class,
//     'index' // gọi hàm index trong ProductsController
// ]);

// Route::get('/findnameproducts/{productName}', [
//     ProductsController::class,
//     'findNameProduct' // gọi hàm detail trong ProductsController
// ]);

// Route::get('/product-detail/{productname}/{id}', [
//     ProductsController::class,
//     'detail' // gọi hàm detail trong ProductsController
// ])->where([
//     'productname' => '[a-zA-Z0-9]+'
//     ,'id'=>'[0-9]+'
// ]);
//string pattern
// '[a-zA-Z0-9]+';


/*
Route::get('/', function () {
    return view('home');
    // return view('welcome'); // trả về reponse a view
    // return env("MY_NAME");
});

//Đường dẫn http://localhost:8001/users
Route::get('/users',function() {
    return 'This is users page'; // trả về string
});

Route::get('/foods',function (){
    return ['pizza','hamburger','coke']; // trả về array
});

Route::get('/aboutMe', function() {
    return response()->json([
        'name' => 'Nguyen Van A',
        'age' => 20,
        'address' => 'Ha Noi'
    ]); // trả về response json
});

//Tên class :: gọi phương thức static
Route::get('/something', function() {
    return redirect('/'); // trả về response redirect trang chủ /
});
*/
