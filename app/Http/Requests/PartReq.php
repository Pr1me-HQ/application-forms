<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'f_name'=>'min:3|:max:30',
            'l_name'=>'required|min:3|:max:30',
            'p_number'=>'required|min:3|:max:20',
            'email'=>'required|min:3|:max:30',
            'job'=>'required|min:3|:max:100',
            'profession'=>'required|min:3|:max:40',
            'who_f_hackathon'=>'required|min:3|:max:50',
            'it_experience'=>'required|min:3|:max:30',
            'hackathon_experience'=>'required|min:3|:max:30',
            'idea'=>'required',
            'about'=>'required',
            'team_name'=>'min:3|:max:30',
        ];
    }
}
