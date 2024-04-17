<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Notification;
use App\Models\Subscribe;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Torann\GeoIP\Facades\GeoIP;

class subscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribes,email',
        ]);
    // إضافة إشعار في الداشبورد
    Notification::create([
        'type' => 'new_subscriber',
        'message' => 'تم الاشتراك جديدًا!',
    ]);

        // الحصول على عنوان IP
        $UserIp = '66.102.0.0';

        // الحصول على معلومات الموقع باستخدام Laravel GeoIP
        $locationData = Location::get($UserIp);

        // تخزين بيانات الاشتراك مع معلومات الموقع في جدول الاشتراكات
        Subscribe::create([
            'email' => $request->input('email'),
            'city' => $locationData->cityName,
            'region' => $locationData->regionName,
            'country' => $locationData->countryName,
            // يمكنك إضافة المزيد حسب الحاجة
        ]);

        return redirect()->back()->with('success', 'تم الاشتراك بنجاح.');
    }


public function show_subscribers(){
    $Subscribe=Subscribe::latest()->get();
    return view('backend.subscribers.show_subscribers',compact('Subscribe'));
}

public function updateStatus(Notification $notification)
{
    $notification->update(['status' => 1]);

    // يمكنك إضافة رد أو توجيه إلى الصفحة التي تريدها هنا
    return redirect('/show_subscribers'); // سيعيد المستخدم إلى الصفحة السابقة
}

public function updateAllNotificationsStatus()
{
    // تحديث جميع الإشعارات إلى الحالة 1
    Notification::where('status', 0)->update(['status' => 1]);

    // قد ترغب في إعادة توجيه المستخدم إلى الصفحة التي كان عليها بعد الضغط على الزر
    return redirect()->back()->with('success', 'تم قراءة جميع الإشعارات.');
}


public function contact(){
    $data=Contact::latest()->get();
    return view('backend.contact.showContact',compact('data'));
}

public function destroyContact($id){
        // ابحث عن السجل الذي تريد حذفه
        $contact = Contact::findOrFail($id);
            // قم بحذف السجل نفسه
        $contact->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح.');
}

}
