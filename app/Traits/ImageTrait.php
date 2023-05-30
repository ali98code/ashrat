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

    public function upload_files(Request $request, $field_name, $directory)
    {
        $files = [];

        if ($request->hasFile($field_name)) {

            foreach ($request->file($field_name) as $file) {
                // File Info
                $file_size = $file->getSize();
                $file_type = $file->getMimeType();

                $new_name = rand(1, 99) . time() . "." . $file->getClientOriginalExtension();
                $path = public_path($directory);
                $file->move($path, $new_name);
                $files[] = [
                    "file_name" => $directory . '/' . $new_name,
                    "file_size" => $file_size,
                    "file_type" => $file_type,
                    "file_status" => true,
                    "file_sort" => 1,
                ];
            }

        }

        return $files;
    }
}
