<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
            'name'           => [
                'required',
            ],
            'email'          => [
                'required',
                'email'
            ],
            'phone_number'   => [
                'numeric',
                'min:9'
            ],
            'profile_photo'  => [
                'required',
                'image',
                'mimes:jpeg,jpg,png,svg,gif',
                'max:2048'
            ],
            'password'       => [
                'required',
                'min:8 ',
                'max:20'
            ],
            'repeatpassword' => [
                'same:password'
            ]            
        ];
    }
}
