<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    // public function sendMail(Request $request){
    //     try {
    //         $data=$request->except("_token");
    //         return $data;
    //         if ($data) {
    //             Mail::to("aymandokdok777@gmail.com")->send(new ContactFormMail($data));
    //             return redirect()->back();
    //         }
    //     } catch (\Exception $ex) {
    //         return redirect()->back()->withErrors([
    //             'error'=>$ex->getMessage()
    //         ]);
    //     }
    //         }

    public function store(Request $request)
{
    // التحقق من البيانات المرسلة من النموذج
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'message' => 'required|string',
    ]);

    // حفظ البيانات في قاعدة البيانات
    Contact::create($request->all());

    // رد العميل برسالة نجاح أو إعادة توجيهه إلى صفحة أخرى إذا لزم الأمر
    return redirect()->back()->with('success', 'تم إرسال النموذج بنجاح.');
}
}
