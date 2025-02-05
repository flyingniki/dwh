<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MetaClassAttrsViewRequest extends FormRequest
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
            'src_attr_id_new' => 'integer',
            'dwh_attr_id_new' => 'integer',
            'src_name_new' => 'string|nullable',
            'src_type_new' => 'string|nullable',
            'src_descr_new' => 'string|nullable',
            'src_comments_new' => 'string|nullable',
            'dwh_name_new' => 'string|nullable',
            'dwh_type_new' => 'string|nullable',
            'dwh_descr_new' => 'string|nullable',
            'dwh_is_pk_new' => 'boolean|nullable',
            'dwh_is_mandatory_new' => 'boolean|nullable'
        ];
    }
}
