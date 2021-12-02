<?php

use App\Http\Controllers\Admin\BrandModalController;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\IssueController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Website\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'index'])->name('index.home');
Route::get('/aboutus', [WebsiteController::class, 'aboutus'])->name('about.us');


Auth::routes();
Route::get('/dashboard', function () {
    return view('admin.layouts.page');
})->middleware('auth');


Route::prefix('admin')->as('admin.')->middleware(['auth'])->group(function() {
    
    Route::resource('profile', ProfileController::class)->only('index', 'store');
    Route::resource('brands', BrandsController::class);
    Route::resource('modals', BrandModalController::class);
    Route::resource('issues', IssueController::class);
});





//image
Route::get('media/get/{file}', function (File $file) {
    if (!Storage::exists($file->getStoragePath())) {
        abort(404, 'Resource Not Found');
    }
    return Storage::response($file->getStoragePath(), $file->name);
})->name('media.get');
