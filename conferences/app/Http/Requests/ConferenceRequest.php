<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'speaker'     => ['required', 'string', 'max:255'],
            'date'        => ['required', 'date_format:Y-m-d'],
            'time'        => ['required', 'date_format:H:i'],
            'address'     => ['required', 'string', 'max:255'],
        ];
    }
}