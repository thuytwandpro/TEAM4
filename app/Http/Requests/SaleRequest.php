<?php

namespace shoes\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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

            'sales' => 'required|max:10',
            'start_date' => 'required|date_format:"Y-m-d"',
            'end_date' => 'required|date_format:"Y-m-d"',
        ];
    }

    public function messages()
    {
        return [
            'required'    => 'Trường :attribute là bắt buộc',
            'max'         => 'Trường :attribute tối đa là :max kí tự',
            'date_format' => 'Trường :attribute format không đúng định dạng :format',
        ];
    }
}
