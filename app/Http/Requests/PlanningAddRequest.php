<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanningAddRequest extends FormRequest
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
             'id_streamer' => 'required|max:255',
             'date' => 'required|max:255',
//             'week' => 'required|max:255',
//             'planning_year' => 'required|max:255',
//             'planning_month' => 'required|max:255',
             'hours' => 'required|max:255',
             'text' => 'required|max:255',
             'image' => 'required|image',
        ];
    }
}
