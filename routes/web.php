<?php

use App\Http\Controllers\dashboard\SettingController;
use Illuminate\Support\Facades\Route;

/*
--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('dashboard.index');
});
/* ---------------- */

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('/setting', function () {
        return view('dashboard.layouts.setting');
    })->name('setting');
    Route::post('/setting/update', [SettingController::class, 'update'])->name('setting.update');
    //Route::get('/setting/index', [SettingController::class, 'index'])->name('setting.index');
});
