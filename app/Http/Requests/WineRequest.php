<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WineRequest extends FormRequest
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
            'winery' => 'required|min:3|max:50',
            'wine' => 'required|min:3|max:350',
            'average' => 'required|min:0|max:5',
            'reviews' => 'required|min:10|max:50',
            'location' => 'required|max:100',
            'image' => 'max:500',
        ];
    }

    public function messages(){
        return [
            'winery.required' => 'Il titolo è un campo obbligatorio',
            'wine.required' => 'La copertina è un campo obbligatorio',
            'average.required' => 'Il prezzo è un campo obbligatorio',
            'reviews.required' => 'La serie è un campo obbligatorio',
            'location.required' => 'La data è un campo obbligatorio',
            'image.required' => 'Il tipo è un campo obbligatorio',

            'winery.min' => 'Il titolo deve contenere almeno :min caratteri',
            'wine.min' => 'La copertina deve contenere almeno :min caratteri',
            'average.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'reviews.min' => 'La serie deve contenere almeno :min caratteri',
            'location.min' => 'La data deve contenere almeno :min caratteri',
            'image.min' => 'Il tipo deve contenere almeno :min caratteri',

            'winery.max' => 'Il titolo deve contenere non piu di :max caratteri',
            'wine.max' => 'La copertina deve contenere non piu di :max caratteri',
            'average.max' => 'Il prezzo deve contenere non piu di :max caratteri',
            'reviews.max' => 'La serie deve contenere non piu di :max caratteri',
            'location.max' => 'La data deve contenere non piu di :max caratteri',
            'image.max' => 'Il tipo deve contenere non piu di :max caratteri',
        ];
    }
}
