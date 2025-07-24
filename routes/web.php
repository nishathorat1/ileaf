<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PagesController::class,'index']);
Route::get('/about-us',[PagesController::class,'about_us']);
Route::get('/contact-us',[PagesController::class,'contact_us']);
Route::get('/services',[PagesController::class,'services']);
Route::prefix('services')->group(function() {
Route::get('/web-application-development',[PagesController::class,'webapp_services'])->name('services.web');
Route::get('/mobile-application-development',[PagesController::class,'mobileapp_services'])->name('services.mobileapp');
Route::get('/iot-development',[PagesController::class,'iot_services'])->name('services.iot');
Route::get('/cloud-transformation',[PagesController::class,'cloud_services'])->name('services.cloud');
});

