<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/* Esto es un nueva clase para validar la petición de formulario */
/* el nombre es store y el nombre de la tabla con el formulario */
class StoreCategory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() /* Quienes están autorizados??? */
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() /* Aquí colocamos las validacion que se hizo en el controlador */
    {
        return [
            'name' => 'required | min:3 | unique:categories',
            'image' => 'required | image',
        ];
    }
    public function messages() /* Creamos una funcion para retornar los mensajes de error en español */
    {
        /* usamos la funcion rulespara hacer los mensajes personalizados */
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'El nombre de tener más de 3 caracteres',
            'name.unique' => 'El nombre ya existe',
            'image.required' => 'La imagen es obligatoria',
            'image.image' => 'El archivo debe ser una imagen',
        ];
    }
}
