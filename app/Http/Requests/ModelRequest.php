<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ModelRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('models')->ignore($this->route('model'))],
        ];
    }
}
