<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('role_create'), Response::HTTP_FORBIDDEN, '403 Forbiden');

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
            'title'         => [
                'required'
            ],
            'permissions.*' => [
                'integer'
            ],
            'permissions'   => [
                'required',
                'array'
            ]
        ];
    }

    public function messages()
    {
        return [
            'title'         => [
                'required'  => 'Tên vai trò không được trống'
            ],
            'permissions.*' => [
                'integer'   => 'Sai kiểu dữ liệu, hãy thử lại !'
            ],
            'permissions'   => [
                'required'  => 'Quyền truy cập cho vai trò này không được trống',
                'array'     => 'Kiểu dữ liệu phải là mảng'
            ]
        ];
    }
}
