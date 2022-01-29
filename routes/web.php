<?php

use App\Http\Controllers\Admin\AddTicket;
use App\Http\Controllers\Admin\BrandModalController;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\InqueryController;
use App\Http\Controllers\Admin\IssueController;
use App\Http\Controllers\Admin\LeadsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\VanController;
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
Route::get('/shop', [WebsiteController::class, 'shop'])->name('shop');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::resource('/tickets', TicketController::class);

Route::get('/commingSoon', function(){
	return view('website.page.commingSoon');
})->name('commingSoon');



Route::post('/saveQuote', [WebsiteController::class, 'saveQuote'])->name('saveQuote');

Auth::routes();
Route::get('/dashboard', function () {
    return view('admin.layouts.page');
})->middleware('auth');


Route::prefix('admin')->as('admin.')->middleware(['auth'])->group(function() {
    
    Route::resource('profile', ProfileController::class)->only('index', 'store');
    Route::resource('brands', BrandsController::class);
    Route::resource('modals', BrandModalController::class);
    Route::resource('issues', IssueController::class);
    Route::resource('inquery', InqueryController::class);
    Route::resource('leads', LeadsController::class);
    Route::resource('van', VanController::class);
    Route::resource('ticket', AddTicket::class);
    Route::get('chkStatus/{id}', [VanController::class, 'chkStatus'])->name('chkStatus');
});

//auto select box
Route::get('/admin/modal/ajax/{brand}', [IssueController::class, 'getModals']);
Route::get('/issue/modal/ajax/{modal}', [WebsiteController::class, 'getIssue']);
Route::get('/leadsMails', [LeadsController::class, 'leadMail'])->name('lead.mail'); //send lead mail
//image
Route::get('media/get/{file}', function (File $file) {
    if (!Storage::exists($file->getStoragePath())) {
        abort(404, 'Resource Not Found');
    }
    return Storage::response($file->getStoragePath(), $file->name);
})->name('media.get');


