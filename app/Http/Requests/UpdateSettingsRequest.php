<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateSettingsRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('settings_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'school_name'     => [
                'required',
            ],
            'school_email'    => [
                'required',
            ],
            'school_phone1' => [
                'required',
            ],
            'school_address1' => [
                'required',
            ],
        ];

    }
}
