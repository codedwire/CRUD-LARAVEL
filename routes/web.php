<?php

use App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('fruits',function (){
//    $fruits = ['apple', 'banana', 'mango'];
//    // print_r($fruits);
//    // echo "this";
//    return 'Method called';
//});
//
//Route::post('api/myself', function () {
//    return "this is me!";
//});
//
//Route::post('api/number_addtion' , function (Request $request){
//    $number_1 = $request->post('number_one');
//    $number_2 = $request->post('number_two');
//
//    $sum = $number_1+$number_2;
//    return $sum;
//});
//
//Route::put('api/update', function (Request $request){
//    $name = $request->name;
//    return "Hello ". ($name ? $name : 'Shikha');
//
//});
//
//Route::delete('api/delete_method', function (Request $request){
//    $delete_record_id = $request->delete_record_id;
//    return "delete record query ". $delete_record_id;
//});
//
//Route::resource('api/bask',BasketController::class);
//
//Route::group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers' ],function (){
//    route::get('book_list','BookRecordController@getBookList');
//});

Route::group([ 'prefix' => 'book','namespace' => 'App\Http\Controllers' ],function (){
    route::get('list','BookRecordController@bookList'); // ----> Read done
    route::get('form', 'BookRecordController@bookForm')->name("bookForm"); // ----> Form done
    route::post('create', 'BookRecordController@bookCreate')->name('bookCreate'); // ----> Create done
    route::get('update/form/{id}', 'BookRecordController@bookUpdateFrom')->name('bookUpdateForm'); // ---> Update done
    route::post('update/{id}', 'BookRecordController@bookUpdate')->name("bookUpdate"); // ---> Update done
    route::get('delete/{id}', 'BookRecordController@bookDelete')->name("bookDelete"); /// ----> Delete done
});



