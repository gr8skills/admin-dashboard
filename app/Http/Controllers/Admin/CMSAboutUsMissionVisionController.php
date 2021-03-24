<?php

namespace App\Http\Controllers\Admin;

use App\CMSAboutUsMissionVision;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutUsMissionVisionRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class CMSAboutUsMissionVisionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $mission = CMSAboutUsMissionVision::orderBy('id', 'DESC')
            ->first();
        return view('admin.missionVision.edit', compact('mission'));
    }

    public function update(UpdateAboutUsMissionVisionRequest $request, CMSAboutUsMissionVision $CMSAboutUsMissionVision)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $CMSAboutUsMissionVision->update($request->all());
        return redirect()->route('admin.about-us-mission-vision.index');

    }
}
