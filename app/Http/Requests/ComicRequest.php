<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:50',
            'description' => 'max:25500',
            'thumb' => 'max:25500',
            'price' => 'required|min:2|max:20',
            'series' => 'required|min:3|max:50',
            'sale_date' => 'required|min:3|max:20',
            'type' => 'required|min:3|max:30',
            'artists' => 'max:25500',
            'writers' => 'max:25500',
        ];
    }

    public function messages(){

        return[
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il titolo deve contenere massimo :max caratteri',
            'description.max' => 'La descrizione deve contenere non più di :max caratteri',
            'thumb.max' => 'La URL della foto deve contenere non più di :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'price.max' => 'Il prezzo deve contenere massimo :max caratteri',
            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'La serie deve contenere almeno :min caratteri',
            'series.max' => 'La serie deve contenere massimo :max caratteri',
            'sale_date.required' => 'La data è obbligatoria',
            'sale_date.min' => 'La data deve contenere almeno :min caratteri',
            'sale_date.max' => 'La data deve contenere massimo :max caratteri',
            'type.required' => 'La tipologia è obbligatoria',
            'type.min' => 'La tipologia deve contenere almeno :min caratteri',
            'type.max' => 'La tipologia deve contenere massimo :max caratteri',
            'artists.max' => 'Artisti deve contenere massimo :max caratteri',
            'writers.max' => 'Scrittori deve contenere massimo :max caratteri',
        ];

    }
}
