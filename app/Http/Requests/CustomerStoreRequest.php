<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
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
            'kodecust' => 'required|string|max:15|unique:customers,kodecust',
            'perusahaancust' => 'required|string|max:255',
            'kontakcust' => 'required|string|max:100',
            'kotacust' => 'required|string|max:255',
            'alamatcust' => 'required|string|max:255',
            'alamat2cust' => 'nullable|string|max:255',
            'notelponcust' => 'required|string|max:30',
            'termcust' => 'required|integer',
            'limitcust' => 'required|numeric|min:0.01|max:999999999999.99',
            'desccust' => 'nullable|string|max:50',
        ];
    }
}
