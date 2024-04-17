<?php

namespace App\Http\Controllers;

use App\Http\Traits\imageTrait;
use App\Models\Slider;
use App\Models\Subscribe;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class SliderController extends Controller
{
    use imageTrait;

    public function index(){
        $SliderData=Slider::latest()->get();
        return view('backend.slider',compact('SliderData'));
    }

    public function addSlider(){
        return view('backend.addSlider');
    }

    public function storeSlider(Request $request)
    {
        // Validation rules
        $rules = [
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,avi,mov,qt|max:20480',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    
        // Custom validation messages
        $customMessages = [
            'image.required' => 'The image field is required.',
            'image.image' => 'The selected file must be an image.',
            // Add more as needed
        ];
    
        // Execute validation
        $request->validate($rules, $customMessages);
    
        // Save images using the trait
        $imageFileName = $this->saveImage($request->file('image'), 'uploads/images/sliderImage');
        $logoFileName = $this->saveImage($request->file('logo'), 'uploads/logo/sliderlogo');
    
        // Save video (if provided)
        $videoFileName = null;
        if ($request->hasFile('video')) {
            $videoFileName = $this->saveImage($request->file('video'), 'uploads/video/slidervideo');
        }
    
        // Save data to the database
        $slider = new Slider();
        $slider->image = $imageFileName ?? null; // يضيف هنا التحقق
        $slider->logo = $logoFileName;
        $slider->video = $videoFileName ?? null; // يضيف هنا التحقق
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->subtitle = $request->input('subtitle');
        $slider->save();
    
        // Redirect or show success message, or anything else
        return redirect()->route('slider')->with('success', 'Slider added successfully');
    }
    


    public function editSlider($id){
        $slider = Slider::findOrFail($id);
        return view('backend.sliders_edit', compact('slider'));
    }




public function updateSlider(Request $request, $id)
{
    // Validation rules
    $rules = [
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'video' => 'nullable|mimes:mp4,avi,mov,qt|max:20480',
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'description' => 'required|string',
    ];

    // Custom validation messages
    $customMessages = [
        'image.image' => 'The selected file must be an image.',
        // Add more as needed
    ];

    // Execute validation
    $request->validate($rules, $customMessages);

    // Find the slider by ID
    $slider = Slider::findOrFail($id);

    // Delete old files
    $this->deleteFile($slider->image);
    $this->deleteFile($slider->logo);
    $this->deleteFile($slider->video);

    // Save images using the trait
    $imageFileName = $this->saveImage($request->file('image'), 'uploads/images/sliderImage');
    $logoFileName = $this->saveImage($request->file('logo'), 'uploads/logo/sliderlogo');

    // Save video (if provided)
    $videoFileName = null;
    if ($request->hasFile('video')) {
        $videoFileName = $this->saveImage($request->file('video'), 'uploads/video/slidervideo');
    }

    // Update data in the database
    $slider->update([
        'image' => $imageFileName ?? null,
        'logo' => $logoFileName,
        'video' => $videoFileName ?? null,
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'subtitle' => $request->input('subtitle'),
    ]);

    // Redirect or show success message, or anything else
    return redirect()->route('slider')->with('success', 'Slider updated successfully');
}

// Function to delete a file
private function deleteFile($fileName)
{
    if ($fileName && File::exists(public_path($fileName))) {
        File::delete(public_path($fileName));
    }
}

public function destroySlider($id)
{
    // ابحث عن السجل الذي تريد حذفه
    $slider = Slider::findOrFail($id);

    // قم بحذف الملفات المرتبطة إذا كانت موجودة
    $this->deleteFile($slider->image);
    $this->deleteFile($slider->logo);
    $this->deleteFile($slider->video);

    // قم بحذف السجل نفسه
    $slider->delete();

    // قم بإعادة توجيه إلى الصفحة التي تريد برسالة نجاح
    return redirect()->route('slider')->with('success', 'Slider deleted successfully');
}




public function Visitors(){
    $visitors=Visit::latest()->get();
    return view('backend.visit.visitors',compact('visitors'));
}

public function getVisitorsData(Request $request) {
    $month = $request->input('month');
    // قم بجلب بيانات الزوار للشهر المحدد
    $data = Visit::whereMonth('created_at', $month)->count();
    
    // قم بتحضير البيانات للاستخدام على الصفحة
    $formattedData =$data;

    return response()->json($formattedData);
}
}
