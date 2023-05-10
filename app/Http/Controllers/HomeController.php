<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function get_sub_categories($id)
    {
        $data = Category::where('parent_id', $id)->get(['id', 'name']);
        return response($data, 200);
    }
}
