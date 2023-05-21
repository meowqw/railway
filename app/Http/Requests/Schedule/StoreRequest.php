<?php

namespace App\Http\Requests\Schedule;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'train_id' => 'integer',
            'arrival_locality_id' => 'integer',
            'departure_locality_id' => 'integer',
            'date' => 'date',
            'travel_time' => 'integer'
        ];
    }
}
