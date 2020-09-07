<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
            'pro_name' => 'required|unique:products,pro_name,'.$this->id,
            'pro_description' => 'required',
            'pro_content' => 'required',
            'pro_category_id' => 'required',
            'pro_price' => 'required',
        ];
    }

    public function messages(){
        return [
            'pro_name.required' => 'Tên không được để trống',
            'pro_name.unique' => 'Tên đã tồn tại',
            'pro_description.required' => 'Yêu cầu nhập thông tin',
            'pro_category_id.required' => 'Chọn danh mục sản phẩm',
            'pro_content.required' => 'Yêu cầu nhập thông tin',
            'pro_price.required' => 'Yêu cầu nhập giá tiền',
        ];
    }
}
