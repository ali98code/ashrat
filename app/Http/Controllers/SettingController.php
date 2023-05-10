<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Http\Requests\SettingWorkRequest;
use App\Models\Category;
use App\Models\User;
use App\Models\UserProfile;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $user = auth()->user();
        return view('settings.index', compact('user'));
    }

    public function settings_update(SettingRequest $request)
    {
        $account = $request->only(['first_name', 'last_name', 'image']);
        $profile = $request->only(['gender', 'country_id', 'birthday']);

        $user_id = auth()->id();

        if($request->hasFile('image'))
        {
            $account['image'] = $this->upload_image($request, 'image', 'uploads/users');
        }

        User::findOrFail($user_id)->update($account);
        UserProfile::where('user_id', $user_id)->update($profile);

        return redirect()->back();
    }

    public function work()
    {
        $user = auth()->user();
        $categories = Category::get(['id', 'name']);
        return view('settings.work', compact('user', 'categories'));
    }

    public function work_update(SettingWorkRequest $request)
    {
        $data = $request->validated();

        if($request->skills)
            $data['skills'] = implode(",", $request->skills);

        if(count($request->account_type) == 2)
            $data['account_type'] = 3;
        else
            $data['account_type'] = $request->account_type[0];

        UserProfile::where('user_id', auth()->id())->update($data);

        return redirect()->back();
    }
}
