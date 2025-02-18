<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttrsViewRequest extends FormRequest
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
            'class_id' => 'integer|nullable',
            'src_attr_id_new' => 'integer|nullable',
            'dwh_attr_id_new' => 'integer|nullable',

            'src_name_new' => 'string|nullable',
            'src_type_new' => 'string|nullable',
            'src_descr_new' => 'string|nullable',
            'src_comments_new' => 'string|nullable',
            'src_sample_value_new' => 'string|nullable',
            'src_store_in_dwh_new' => 'boolean|nullable',
            'src_subclass_id_new' => 'string|nullable',
            'src_is_drop_new' => 'boolean|nullable',
            'src_is_system_new' => 'boolean|nullable',
            'src_fk_class_new' => 'string|nullable',

            'dwh_name_new' => 'string|nullable',
            'dwh_type_new' => 'string|nullable',
            'dwh_descr_new' => 'string|nullable',
            'dwh_is_pk_new' => 'boolean|nullable',
            'dwh_is_mandatory_new' => 'boolean|nullable',
            'dwh_sample_value_new' => 'string|nullable',
            'dwh_is_drop_new' => 'boolean|nullable',
            'dwh_is_system_new' => 'boolean|nullable',
            'dwh_is_auto_new' => 'boolean|nullable',
            'dwh_is_unique_new' => 'boolean|nullable',
            'dwh_is_indexed_new' => 'boolean|nullable'
        ];
    }
}
