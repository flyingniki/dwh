<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MetaClassesViewRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'data_class_name' => 'string|nullable',
            'data_class_direct' => 'string|nullable',
            'data_class_source' => 'string|nullable',
            'data_class_dr' => 'string|nullable',
            'data_class_dict' => 'string|nullable',
            'child_table1' => 'string|nullable',
            'child_table2' => 'string|nullable',
            'description' => 'string|nullable',
            'subsystem' => 'string|nullable',
            'reciever' => 'string|nullable',
            'wiki_link' => 'string|nullable',
            'load_method' => 'string|nullable',
            'last_updated_dev' => 'string|nullable'
        ];
    }
}
