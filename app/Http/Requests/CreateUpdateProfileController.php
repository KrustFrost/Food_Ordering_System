<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
class CreateUpdateProfileController extends FormRequest
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
    public function rules(User $user)
    {
        return [
            'name' => 'required_without_all',
            'email' => 'required_without_all|email|',
            'phone' => 'required_without_all|regex:/[0-9]{10}/',
        ];
    }
}
