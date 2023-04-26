<?php

use App\Mail\contactmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/send-mail', function (Request $request) {
  /*   return $request; */
    $email = 'aantiinoo@gmail.com';

    Mail::to($email)->send(new contactmail($request));
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
