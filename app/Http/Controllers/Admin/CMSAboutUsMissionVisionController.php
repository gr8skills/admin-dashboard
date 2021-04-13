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

    public function update(UpdateAboutUsMissionVisionRequest $request, $CMSAboutUsMissionVision)
    {

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $CMSAboutUsMissionVision = CMSAboutUsMissionVision::find($CMSAboutUsMissionVision);
        $file1 = $request->file('main_img');
        $file2 = $request->file('image1');
        $file3 = $request->file('image2');
        $file4 = $request->file('image3');
        if ($file1 != '') {
            $path = public_path() . '/images/';

            if (file_exists($path . $CMSAboutUsMissionVision->main_image)) {
                if ($CMSAboutUsMissionVision->main_image != '' && $CMSAboutUsMissionVision->main_image != null) {
                    $file_old1 = $path . $CMSAboutUsMissionVision->main_image;
                    unlink($file_old1);
                }
            }
            $main_image = time() .'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $main_image);
            $request->main_img->move(public_path('images/'), $main_image);
            $request->main_img = $main_image;
        }
        if ($file2 != '') {
            $path = public_path() . '/images/';

            if (file_exists($path . $CMSAboutUsMissionVision->image2)) {
                if ($CMSAboutUsMissionVision->image2 != '' && $CMSAboutUsMissionVision->image2 != null) {
                    $file_old2 = $path . $CMSAboutUsMissionVision->image2;
                    unlink($file_old2);
                }
            }
            $image1 = time() .'.'. $file2->getClientOriginalName();
            $path = $file2->storeAs('public/images', $image1);
            $request->image1->move(public_path('images/'), $image1);
            $request->image1 = $image1;
        }
        if ($file3 != '') {
            $path = public_path() . '/images/';

            if (file_exists($path . $CMSAboutUsMissionVision->image2)) {
                if ($CMSAboutUsMissionVision->image2 != '' && $CMSAboutUsMissionVision->image2 != null) {
                    $file_old3 = $path . $CMSAboutUsMissionVision->image2;
                    unlink($file_old3);
                }
            }
            $image2 = time() .'.'. $file3->getClientOriginalName();
            $path = $file3->storeAs('public/images', $image2);
            $request->image2->move(public_path('images/'), $image2);
            $request->image2 = $image2;
        }
        if ($file4 != '') {
            $path = public_path() . '/images/';

            if (file_exists($path . $CMSAboutUsMissionVision->image3)) {
                if ($CMSAboutUsMissionVision->image3 != '' && $CMSAboutUsMissionVision->image3 != null) {
                    $file_old4 = $path . $CMSAboutUsMissionVision->image3;
                    unlink($file_old4);
                }
            }
            $image3 = time() .'.'. $file4->getClientOriginalName();
            $path = $file4->storeAs('public/images', $image3);
            $request->image3->move(public_path('images/'), $image3);
            $request->image3 = $image3;
        }
        
        $CMSAboutUsMissionVision->update($request->all());

        $index = CMSAboutUsMissionVision::orderBy('id', 'DESC')->first();
        if ($file1 != ''){
            $index->main_img = $main_image;
            $index->save();
        }
        if ($file2 != ''){
            $index->image1 = $image1;
            $index->save();
        }
        if ($file3 != ''){
            $index->image2 = $image2;
            $index->save();
        }
        if ($file4 != ''){
            $index->image3 = $image3;
            $index->save();
        }
        return redirect()->route('admin.about-us-mission-vision.index');

    }
}
