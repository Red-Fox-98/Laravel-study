<?php

namespace App\Http\Requests\Api\Session;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'map_name' => 'string',
            'player_id' => 'string',
        ];
    }
}
