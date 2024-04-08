<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClinicProgramRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'opening_hour' => ['required', 'date_format:"H:i"', 'before:closing_hour'],
            'closing_hour' => ['required', 'date_format:"H:i"'],
            'days' => ['required'],
        ];
    }
}
