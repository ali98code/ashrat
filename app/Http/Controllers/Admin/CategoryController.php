<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::whereNull('parent_id')->get(['id', 'name']);
        return view('admin.categories.create', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();

        Category::create($data);

        $notification = [
            'alert' => 'success',
            'message' => 'تمت الإضافة بنجاح'
        ];

        return redirect()->back()->with($notification);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::whereNull('parent_id')->where('id', '!=', $id)->get(['id', 'name']);
        return view('admin.categories.edit', compact('category', 'categories'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $data = $request->validated();
        $category = Category::findOrFail($id);

        // Update date
        $category->update($data);

        $notification = [
            'alert' => 'success',
            'message' => 'تم التعديل بنجاح'
        ];

        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        $notification = [
            'alert' => 'success',
            'message' => 'تم الحذف بنجاح'
        ];

        return redirect()->route('admin.categories.index')->with($notification);
    }
}
