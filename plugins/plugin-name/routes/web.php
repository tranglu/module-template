<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/8/2021
 * Time: 1:35 PM
 */
use Illuminate\Support\Facades\Route;
use VendorName\MainProjectName\PluginName\Http\Controllers\PluginNameController;
//Route::prefix('plugins/first-module')->group(function () {
////    Route::get('/', function () {
////        return 'Module first-module" đã được load.';
////    })->name('plugins.first-module');
//    Route::get('/',[FirstModuleController::class,'index'])->name('plugins.first-module');
//});
Route::get('/1234',[PluginNameController::class,'index'])->name('plugins.first-module');
    Route::get('/', function () {
        return 'Module first-module" đã được load.';
    })->name('plugins.first-module1');