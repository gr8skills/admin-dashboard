<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateCareerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('career_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'job_title'    => [
                'required',
           ],
            'job_link'    => [
                'required',
            ],

        ];

    }
}
