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
use App\Http\Controllers\HomeController;
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
Route::get('/about-us', [WebsiteController::class, 'aboutus'])->name('about.us');
Route::get('/shop', [WebsiteController::class, 'shop'])->name('shop');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/van', [WebsiteController::class, 'van'])->name('van');
Route::get('/terms', [WebsiteController::class, 'termsCondition'])->name('terms.Condition');
Route::get('/policy', [WebsiteController::class, 'privacyPolicy'])->name('privacy.policy');

Route::get('/apple_repairs', [WebsiteController::class, 'apple_repairs'])->name('apple_repairs');

Route::get('/iphone', [WebsiteController::class, 'iphone'])->name('iphone');
Route::get('/iphone_repairs', [WebsiteController::class, 'iphone_repairs'])->name('iphone_repairs');
Route::post('/savebooking', [WebsiteController::class, 'savebooking'])->name('savebooking');
Route::get('/macbook', [WebsiteController::class, 'macbook'])->name('macbook');
Route::get('/ipad', [WebsiteController::class, 'ipad'])->name('ipad');
Route::get('/ipod', [WebsiteController::class, 'ipod'])->name('ipod');
Route::get('/iwatch', [WebsiteController::class, 'iwatch'])->name('iwatch');

Route::get('/android_repairs', [WebsiteController::class, 'android_repairs'])->name('android_repairs');
Route::get('/samsung', [WebsiteController::class, 'samsung'])->name('samsung');
Route::get('/sony', [WebsiteController::class, 'sony'])->name('sony');
Route::get('/Huawei', [WebsiteController::class, 'Huawei'])->name('Huawei');
Route::get('/htc', [WebsiteController::class, 'htc'])->name('htc');
Route::get('/Xiaomi', [WebsiteController::class, 'Xiaomi'])->name('Xiaomi');
Route::get('/oppo', [WebsiteController::class, 'oppo'])->name('oppo');
Route::get('/OnePlus', [WebsiteController::class, 'OnePlus'])->name('OnePlus');
Route::get('/nokia', [WebsiteController::class, 'nokia'])->name('nokia');
// Route::get('/lg', [WebsiteController::class, 'lg'])->name('lg');
Route::get('/BlackBerry', [WebsiteController::class, 'BlackBerry'])->name('BlackBerry');
Route::get('/asus', [WebsiteController::class, 'asus'])->name('asus');
Route::get('/vivo', [WebsiteController::class, 'vivo'])->name('vivo');
Route::get('/motorola', [WebsiteController::class, 'motorola'])->name('motorola');
Route::get('/MSsurface', [WebsiteController::class, 'MSsurface'])->name('MSsurface');
// Route::get('/Telsetra', [WebsiteController::class, 'Telsetra'])->name('Telsetra');
Route::get('/ipad_repairs', [WebsiteController::class, 'ipad_repairs'])->name('ipad_repairs');
Route::resource('/tickets', TicketController::class);
Route::post('/savesVanInquiry', [WebsiteController::class, 'savesVanInquiry'])->name('saves.VanInquiry');

Route::get('/commingSoon', function(){
	return view('website.page.commingSoon');
})->name('commingSoon');



Route::post('/saveQuote', [WebsiteController::class, 'saveQuote'])->name('saveQuote');

Auth::routes();
Route::get('/dashboard', [HomeController::class, 'index'])->middleware('auth');


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


