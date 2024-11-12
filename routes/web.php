<?php

use App\Models\About;
use App\Models\HomeSetting;
use Illuminate\Support\Facades\Route;

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
/*
 * $settings = HomeSetting::first(); // Получаем настройки главной страницы
    $about = About::first(); // Получаем первую запись из таблицы about
    $services = \App\Models\Service::all(); // Получаем первую запись из таблицы about
    $pricings = \App\Models\Pricing::all(); // Получаем первую запись из таблицы about
    return view('layout', compact('settings', 'about', 'services', 'pricings'));
 */

Route::get('/', function () {
    $settings = HomeSetting::first(); // Получаем настройки главной страницы
    $about = About::first(); // Получаем первую запись из таблицы about
    $services = \App\Models\Service::all(); // Получаем первую запись из таблицы about
    $pricings = \App\Models\Pricing::all(); // Получаем первую запись из таблицы about
    return view('layout', compact('settings', 'about', 'services', 'pricings'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
