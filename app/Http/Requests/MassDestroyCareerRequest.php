<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCareerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('career_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:faq,id',
        ];

    }
}
