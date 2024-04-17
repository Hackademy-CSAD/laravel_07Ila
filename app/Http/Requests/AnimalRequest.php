<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min.3',
            'age'=>'required|integer',
            'img'=>'required|imag',
        ];
    }
}
            // i valori dell'array associativo delle regole di validazione sono il form, 
            // per applicare le devo cercar sulla documentaz la class request non nostra ma 
            // in AnimalController aggiungo Animal davatni al request
            // poi vado su create.blade
