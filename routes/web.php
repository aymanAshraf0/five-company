<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\subscribeController;
use App\Models\Slider;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;
use Torann\GeoIP\Facades\GeoIP;


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



Route::get('/', function (Request $request) {
    // الحصول على عنوان IP
    $UserIp = '66.102.0.0';

    // التحقق مما إذا كان العنوان موجودًا في جدول الزوار
    $existingVisit = Visit::where('ip_address', $UserIp)->first();

    // إعداد قيمة افتراضية لـ $locationData
    $locationData = [];

    // إذا لم يكن العنوان موجودًا، قم بتخزينه
    if (!$existingVisit) {
        // الحصول على معلومات الموقع باستخدام Laravel GeoIP
        
        $locationData = Location::get($UserIp);



        // تخزين معلومات الموقع في جدول الزوار
        Visit::create([
            'ip_address' => $UserIp,
            'city' => $locationData->cityName,
            'region' => $locationData->regionName,
            'country' => $locationData->countryName,
            // يمكنك إضافة المزيد حسب الحاجة
        ]);
    }

    // استرجاع البيانات اللازمة لصفحة العرض
    $slider = Slider::latest()->get();

    // إرجاع العرض مع البيانات
    return view('frontend.index', compact('slider','locationData'));
});

// Route::post('/submit-form', [mailController::class, 'sendMail'])->name('submit-form');
Route::post('/store-form', [mailController::class, 'store'])->name('store-form');

Route::post('/subscribe', [subscribeController::class, 'subscribe'])->name('subscribe');





Auth::routes(['register' => false]);


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
    
    Route::get('/slider', [SliderController::class, 'index'])->name('slider');
    Route::get('/Add_Slider', [SliderController::class, 'addSlider'])->name('addSlider');
    Route::post('/Store_Slider', [SliderController::class, 'storeSlider'])->name('storeSlider');
    Route::get('/edit_Slider/{id}', [SliderController::class, 'editSlider'])->name('slider.edit');
    Route::post('/update_slider/{id}', [SliderController::class, 'updateSlider'])->name('slider.update');
    Route::delete('/destroy_Slider/{id}', [SliderController::class, 'destroySlider'])->name('slider.destroy');
    Route::get('/Visitors', [SliderController::class, 'Visitors'])->name('visitors');
    Route::post('/get-visitors-data', [SliderController::class, 'getVisitorsData'])->name('get-visitors-data');
    
    
    
    Route::get('/show_subscribers', [subscribeController::class, 'show_subscribers'])->name('show_subscribers');
    Route::post('/update-notification-status/{notification}', [subscribeController::class, 'updateStatus']);
    Route::post('/update-all-notifications-status', [subscribeController::class, 'updateAllNotificationsStatus']);
    Route::get('/contact', [subscribeController::class, 'contact'])->name('contact');
    Route::delete('/destroy_contact/{id}', [subscribeController::class, 'destroyContact'])->name('contact.destroy');
});
