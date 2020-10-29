<?php

use App\Models\Person;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;


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
    return view('picker');
});
Route::get('/pick',function(){
   	$person =Person::inRandomOrder()->limit(1)->first();

   	
   	\Log::info($person);

    return response()->json(['winner'=>$person],200);


});
Route::get('/upload',[PersonController::class,'showForm'])->name('show.form');
Route::post('/upload',[PersonController::class,'import']);
