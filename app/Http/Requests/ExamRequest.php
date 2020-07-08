<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
       return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_customer' => 'required|max:255',
            'job_customer' => 'required',
            'email_customer' => 'required|email'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name_customer.required' => 'Tên không được để trống',
            'job_customer.required' => 'Tên không được để trống',
            'email_customer.required' => 'Email không được để trống',
            'email_customer.email' => 'Email phải có định dạng @exemple'
        ];
    }
}
