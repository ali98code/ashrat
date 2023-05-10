<?php


namespace App\Traits;


use Illuminate\Http\Request;

trait ImageTrait
{
    public function upload_image(Request $request, $field_name = 'image', $directory = 'uploads')
    {
        if ($request->hasFile($field_name)) {
            $image = $request->file($field_name);
            $file_name = rand(1, 99) . time() . "." . $image->getClientOriginalExtension();
            $path = public_path($directory);
            $image->move($path, $file_name);
            return $directory . '/' . $file_name;
        }
        return null;
    }
}
