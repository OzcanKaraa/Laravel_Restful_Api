<?php

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
//Prefix ile Gruplandirma
Route::prefix(`basics`)->group(function (){
    Route::get('/', function () {
        return view('welcome');
//    return redirect()->route(`category.show`,[`slug`=>`books`]);
    });
    Route::get('/merhaba-json3', function () {
    return response()->json(['message' => "Merhaba Api"]);
});
});
Route::get('/', function () {
    return view('welcome');
//    return redirect()->route(`category.show`,[`slug`=>`books`]);
});
//
//Route::get('/merhaba', function () {
//    return ('Hello Api');
//});
//
//Route::get('/merhaba-json', function () {
//    return ['message' => "Merhaba Api"];
//});

//------------------------------------------------------------------------
//JSON ILE ARRAY CIKTISI HATASI
//Route::get('/merhaba-json2', function () {
//    return response(['message' => "Merhaba Api"],200)
//        ->header(`Content-Type`,`text/plain`);
//});

//Route::get('/merhaba-json2', function () {
//    return response(['message' => "Merhaba Api"],200)
//        ->header(`Content-Type`,`application/json`);
//});
//------------------------------------------------------------------------
//JSON ILE ARRAY CIKTISI VERDI
//Route::get('/merhaba-json3', function () {
//    return response()->json(['message' => "Merhaba Api"]);
//});


//ÇALIŞMADI
//Route::get(`/product/{id}/{type?}`, function ($id,$r_type =`test`){
//   return "Product Id : $id , Type : $r_type";
//});


//Route tanimlarini isimlendirme

//Route::get(`/category/{slug}`,function ($slug) {
//    return "Category Slug: $slug";
//})->name(`category.show`);


//Route::get('/', function () {
//    return view('welcome');
//    return redirect()->route(`category.show`,[`slug`=>`books`]);
//});
//Route::get(`/product/{id},{style?})`, `ProductController@show`);
//Route::get(`/product/{id},{style?})`, `ProductController@show`)->name(`Product.show`);
