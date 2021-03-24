<?php

namespace App\Http\Controllers\Admin;

use App\EMIS;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateEmisRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class EMISController extends Controller
{
    //
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $emis = EMIS::orderBy('id', 'DESC')
            ->first();
        return view('admin.emis.edit', compact('emis'));
    }

    public function update(UpdateEmisRequest $request, EMIS $EMIS)
    {

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $emis = EMIS::orderBy('id', 'DESC')
            ->first();
        $emis->update($request->all());
        return redirect()->route('admin.emis.index');

    }

}
