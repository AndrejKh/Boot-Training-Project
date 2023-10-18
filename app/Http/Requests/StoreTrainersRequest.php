<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Trainers;

class StoreTrainersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'company' => ['string', 'max:512'],
            'location' => ['string', 'max:512'],
            'courses' => ['string', 'max:512'],
            'email' => ['email', 'max:255', Rule::unique(Trainers::class)],
            'mobile' => ['string', 'max:512'],
            'qualifications' => ['string', 'max:512'],
            'photo' => ['string', 'max:512']
            
        ];
    }
}
