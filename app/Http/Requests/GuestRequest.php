<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'name' => ['required', 'string', 'min:1'],
            'lastname' => ['required', 'string', 'min:1'],
            'subject' => ['required', 'string', 'min:1']

        ];
    }
}
