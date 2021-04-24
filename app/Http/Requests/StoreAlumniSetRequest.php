<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreAlumniSetRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'name'     => [
                'required',
            ],
            'from'     => [
                'required',
            ],
            'to'     => [
                'required',
            ],
            'active'     => [
                'required',
            ],
        ];

    }
}
