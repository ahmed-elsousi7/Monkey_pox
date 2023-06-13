<?php

namespace App\Http\Requests\Admin\Prevention;

use App\Models\Prevention;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePreventionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return array_merge(Prevention::createRule(), [
            'id' => 'required|exists:preventions,id'
        ]);
    }
}
