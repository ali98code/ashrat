<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    use ImageTrait;

    public function create()
    {
        return view('portfolios.create');
    }

    public function store(PortfolioRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->id();
        $data['image'] = $this->upload_image($request, 'image', 'uploads/portfolios');
        $data['skills'] = implode(",", $request->skills);

        Portfolio::create($data);

        return redirect()->route('home');
    }
}
