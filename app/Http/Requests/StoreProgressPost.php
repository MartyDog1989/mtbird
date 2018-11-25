<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProgressPost extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'u_requested_date' => 'nullable|date_format:Y-m-d',
            'u_occupancy_date' => 'nullable|date_format:Y-m-d',
            'u_permission_date' => 'nullable|date_format:Y-m-d',
            'u_roadworks_date' => 'nullable|date_format:Y-m-d',
            'u_inspected_date' => 'nullable|date_format:Y-m-d',
            'u_picture_date' => 'nullable|date_format:Y-m-d',
            'd_requested_date' => 'nullable|date_format:Y-m-d',
            'd_occupancy_date' => 'nullable|date_format:Y-m-d',
            'd_permission_date' => 'nullable|date_format:Y-m-d',
            'd_roadworks_date' => 'nullable|date_format:Y-m-d',
            'd_inspected_date' => 'nullable|date_format:Y-m-d',
            'd_picture_date' => 'nullable|date_format:Y-m-d',
        ];
    }
    
    /**
     * エラーメッセージを指定
     * 
     * @return array
     */
    public function messages()
    {
        return [
            '*.date_format' => '正しい形式で入力して下さい。',
        ];
    }
}
