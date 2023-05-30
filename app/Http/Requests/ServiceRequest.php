<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
            {
                return [
                    'title' => 'required|max:255',
                    'category_id' => 'required|numeric',
                    'description' => 'required',
                    'images' => 'required',
                    'images.*' => 'mimes:jpg,jpeg,png,gif|max:3000',
                    'video_link' => 'nullable',
                    'notes' => 'required',
                    'skills' => 'required',
                    'price' => 'required|numeric',
                    'delivery_days' => 'required|numeric'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [

                ];
            }
            default: break;
        }
    }
}
