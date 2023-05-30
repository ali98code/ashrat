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
        $data = \Illuminate\Support\Arr::except($request->validated(), 'files');

        $data['user_id'] = auth()->id();
        $data['skills'] = implode(",", $request->skills);

        // Upload Image
        $data['image'] = $this->upload_image($request, 'image', 'uploads/portfolios');
        // Upload Files
        $files = $this->upload_files($request, 'files', 'uploads/portfolios');

        // Create Portfolio
        $portfolio = Portfolio::create($data);

        // Store Files
        foreach ($files as $file)
        {
            $portfolio->media()->create($file);
        }

        return redirect()->route('home');
    }
}
