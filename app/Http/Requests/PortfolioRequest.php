<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
                    'description' => 'required',
                    'image' => 'required|mimes:jpg,jpeg,png,gif|max:3000',
                    'files' => 'nullable',
                    'files.*' => 'max:3000',
                    'skills' => 'required',
                    'link' => 'nullable',
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
