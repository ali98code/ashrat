<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use ImageTrait;

    public function index($slug = null, $sub = null)
    {
        if($slug) {
            $category = Category::whereSlug($slug)->first();
            if(!$category)
                return abort(404);

            if($sub) {
                $category = Category::whereSlug($sub)->first();
                $services = Service::where('category_id', $category->id)->get();
            } else {
                $services = Service::whereRelation('category', 'parent_id', $category->id)->get();
            }

            return view('services.services_of_category', compact('category', 'services'));
        }

        $services = Service::latest()->get();
        $categories = Category::whereNull('parent_id')->get();
        return view('services.index', compact('services', 'categories'));
    }

    public function create()
    {
        $categories = Category::whereNull('parent_id')->get(['id', 'name']);
        return view('services.create', compact('categories'));
    }

    public function store(ServiceRequest $request)
    {
        $data = \Illuminate\Support\Arr::except($request->validated(), 'images');

        $data['user_id'] = auth()->id();

        $data['skills'] = implode(",", $request->skills);

        // Upload Image
        $image = $this->upload_image($request, 'images', 'uploads/services');

        $service = Service::create($data);

        ServiceImage::create([
            'service_id' => $service->id,
            'image' => $image
        ]);

        return redirect()->route('home');
    }
}
