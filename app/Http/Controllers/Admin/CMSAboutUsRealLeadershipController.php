<?php

namespace App\Http\Controllers\Admin;

use App\CMSAboutUsRealLeadership;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutUsRealLeadershipRequest;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class CMSAboutUsRealLeadershipController extends Controller
{
    public function index()
    {
        //
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $realLeader = CMSAboutUsRealLeadership::orderBy('id', 'DESC')
            ->first();

        return view('admin.realLeadership.edit', compact('realLeader'));
    }

    public function update(UpdateAboutUsRealLeadershipRequest $request, CMSAboutUsRealLeadership $CMSAboutUsRealLeadership)
    {

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

//        $principalImage = $request->file('principal_image');
//        $principalImageS = $request->file('principal_image');
//
//        if(!is_null($principalImage))
//            $principalImage =  time().'.'.$principalImage->getClientOriginalName();
//        else
//            $principalImage = '';
//
//        if(!is_null($principalImage))
//            $path = $principalImage->storeAs('public/images', $principalImage);
//        else
//            $path = '';
//
//        if(!is_null($principalImage))
//            $request->principal_image->move(public_path('images'), $principalImage);
//
//
//        $request->principal_image = $path;


        $realLeader = CMSAboutUsRealLeadership::orderBy('id', 'DESC')
            ->first();
        $update = $realLeader->update($request->all());
//        $index->principal_image = $principalImage;
//        $update->save();
        return redirect()->route('admin.about-us-leadership.index');
    }

}
