<?php

namespace App\Http\Requests;

use App\Rules\ToDateAfterFromDate;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            "dress_id" => ['required', 'numeric'],
            "size_id" => ['required', 'numeric'],
            "dress_size_id" => ['required', 'numeric'],
            "to" => ['required',],
            "from" => ['required', new ToDateAfterFromDate($this->to)]
        ];
    }
}

