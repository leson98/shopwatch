<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'      =>  'required|unique:products,name',
            'fimage'     =>  'required|image',
            'price'     =>  'required|integer',
            'material'  =>  'required',
            'case'      =>  'required',
            'strap'     =>  'required',
            'water_resistance'  =>  'required',
            'amount'    =>  'required|integer',
            'description'       =>  'required',
            'fimage_details'    =>  'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'     =>  'Vui lòng nhập tên',
            'name.unique'       =>  'Tên sản phẩm đã tồn tại',
            'fimage.required'    =>  'Vui lòng chọn ảnh',
            'fimage.image'       =>  'Vui lòng chọn ảnh hợp lệ',
            'price.required'    =>  'Vui lòng nhập giá',
            'price.integer'     =>  'Vui lòng nhập chữ số',
            'material.required' =>  'Vui lòng nhập chất liệu',
            'case.required'     =>  'Vui lòng nhập vỏ',
            'strap.required'    =>  'Vui lòng nhập dây',
            'water_resistance.required' =>  'Vui lòng nhập chống nước',
            'amount.required'   =>  'Vui lòng nhập số lượng',
            'amount.integer'   =>  'Vui lòng nhập chữ số',
            'description.required'      =>  'Vui lòng nhập mô tả',
            'fimage_details.required'   =>  'Vui lòng chọn ảnh'
            
        ];
    }
}
