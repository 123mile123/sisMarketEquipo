<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'string|required|unique:products,name,'.$this->route('product')->id.'|max:255',                     
            'image'=>'required|dimensions:min_windth=100,min_height=200',
            'sell_price'=>'required|',        
            'category_id'=>'integer|required|exists:App\Category,id',
            'provider_id'=>'integer|required|exists:App\Provider,id',

        ];
    }

    public function messages(){
        return[
            
            'name.string'=>'Valor no es correcto.',
            'name.required'=>'El campo es requerido.',
            'name.unique'=>'El producto ya esta registrado.',
            'name.max'=>'Solo se admite 255 caracteres.',
            
            'image.required'=>'El campo es requerido.',
            'image.dimensions'=>'Solo se permiten imagenes de 100x200 px.',

            'sell_price.required'=>'El campo es requerido',

            'category_id.integer'=>'El valor debe ser entero',
            'category_id.required'=>'El campo es requerido',
            'category_id.exists'=>'La categoria no existe',

            'provider_id.integer'=>'El valor debe ser entero',
            'provider_id.required'=>'El campo es requerido',
            'provider_id.exists'=>'La categoria no existe',


        ];
    }
}
