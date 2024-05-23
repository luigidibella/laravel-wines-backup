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
            'reviews' => 'required|min:3|max:50',
            'location' => 'required|max:100',
            'image' => 'max:500',
        ];
    }

    public function messages(){
        return [
            'winery.required' => 'La cantina è un campo obbligatorio',
            'wine.required' => 'Il vino è un campo obbligatorio',
            'average.required' => 'Il voto è un campo obbligatorio',
            'reviews.required' => 'Le recensioni è un campo obbligatorio',
            'location.required' => 'La localita è un campo obbligatorio',
            'image.required' => 'L\'immagine è un campo obbligatorio',

            'winery.min' => 'La cantina deve contenere almeno :min caratteri',
            'wine.min' => 'Il vino deve contenere almeno :min caratteri',
            'average.min' => 'Il voto deve contenere almeno :min caratteri',
            'reviews.min' => 'Le recensioni deve contenere almeno :min caratteri',
            'location.min' => 'La localita deve contenere almeno :min caratteri',
            'image.min' => 'L\'immagine deve contenere almeno :min caratteri',

            'winery.max' => 'La cantina deve contenere non piu di :max caratteri',
            'wine.max' => 'Il vino deve contenere non piu di :max caratteri',
            'average.max' => 'Il voto deve contenere non piu di :max caratteri',
            'reviews.max' => 'Le recensioni deve contenere non piu di :max caratteri',
            'location.max' => 'La localita deve contenere non piu di :max caratteri',
            'image.max' => 'L\'immagine deve contenere non piu di :max caratteri',
        ];
    }
}
