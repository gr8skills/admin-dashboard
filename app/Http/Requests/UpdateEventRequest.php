<?php

namespace App\Http\Requests;

use App\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateEventRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('events_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'title'    => [
                'required',
           ],
            'content'    => [
                'required',
            ],

        ];

    }
}
