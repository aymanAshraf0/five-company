<?php
namespace App\Http\Traits;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use PhpParser\Builder\Trait_;

trait imageTrait
{
    function saveImage($image, $folder)
    {
        // التحقق مما إذا كان الملف موجودًا
        if ($image !== null) {
            $fileEx = $image->getClientOriginalExtension();
            $fileName = time() . '.' . $fileEx;
            $path = $folder;
            $image->move($path, $fileName);
            return $fileName;
        } else {
            // إذا كان الملف غير موجود، يمكنك اتخاذ إجراء مناسب، مثل إرجاع قيمة فارغة أو رسالة خطأ
            // في هذا المثال، سيتم إرجاع قيمة فارغة
            return null;
        }
    }
}
