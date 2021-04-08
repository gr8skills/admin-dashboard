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

//        dd($realLeader->main_image);

        return view('admin.realLeadership.edit', compact('realLeader'));
    }

    public function update(UpdateAboutUsRealLeadershipRequest $request,  $CMSAboutUsRealLeadership)
    {

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $CMSAboutUsRealLeadership = CMSAboutUsRealLeadership::find($CMSAboutUsRealLeadership);

        $file1 = $request->file('main_image');
        $file2 = $request->file('image1');
        $file3 = $request->file('image2');
        $file4 = $request->file('lImage1');
        $file5 = $request->file('lImage2');
        $file6 = $request->file('lImage3');
        $file7 = $request->file('lImage4');
        if ($file1 != '') {
            $path = public_path() . '/images/';

            if ($path . $CMSAboutUsRealLeadership->main_image) {
                if ($CMSAboutUsRealLeadership->main_image != '' && $CMSAboutUsRealLeadership->main_image != null) {
                    $file_old1 = $path . $CMSAboutUsRealLeadership->main_image;
                    unlink($file_old1);
                }
            }
            $img1 = time() .'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $img1);
            $request->main_image->move(public_path('images/'), $img1);
            $request->main_image = $img1;
        }
        if ($file2 != '') {
            $path = public_path() . '/images/';

            if ($path . $CMSAboutUsRealLeadership->image1) {
                if ($CMSAboutUsRealLeadership->image1 != '' && $CMSAboutUsRealLeadership->image1 != null) {
                    $file_old2 = $path . $CMSAboutUsRealLeadership->image1;
                    unlink($file_old2);
                }
            }
            $img2 = time() .'.'. $file2->getClientOriginalName();
            $path = $file2->storeAs('public/images', $img2);
            $request->image1->move(public_path('images/'), $img2);
            $request->image1 = $img2;
        }
        if ($file3 != '') {
            $path = public_path() . '/images/';

            if ($path . $CMSAboutUsRealLeadership->image2) {
                if ($CMSAboutUsRealLeadership->image2 != '' && $CMSAboutUsRealLeadership->image2 != null) {
                    $file_old3 = $path . $CMSAboutUsRealLeadership->image2;
                    unlink($file_old3);
                }
            }
            $img3 = time() .'.'. $file3->getClientOriginalName();
            $path = $file3->storeAs('public/images', $img3);
            $request->image2->move(public_path('images/'), $img3);
            $request->image2 = $img3;
        }
        if ($file4 != '') {
            $path = public_path() . '/images/';

            if ($path . $CMSAboutUsRealLeadership->lImage1) {
                if ($CMSAboutUsRealLeadership->lImage1 != '' && $CMSAboutUsRealLeadership->lImage1 != null) {
                    $file_old4 = $path . $CMSAboutUsRealLeadership->lImage1;
                    unlink($file_old4);
                }
            }
            $img4 = time() .'.'. $file4->getClientOriginalName();
            $path = $file4->storeAs('public/images', $img4);
            $request->lImage1->move(public_path('images/'), $img4);
            $request->lImage1 = $img4;
        }
        if ($file5 != '') {
            $path = public_path() . '/images/';

            if ($path . $CMSAboutUsRealLeadership->lImage2) {
                if ($CMSAboutUsRealLeadership->lImage2 != '' && $CMSAboutUsRealLeadership->lImage2 != null) {
                    $file_old5 = $path . $CMSAboutUsRealLeadership->lImage2;
                    unlink($file_old5);
                }
            }
            $img5 = time() .'.'. $file5->getClientOriginalName();
            $path = $file5->storeAs('public/images', $img5);
            $request->lImage2->move(public_path('images/'), $img5);
            $request->lImage2 = $img5;
        }
        if ($file6 != '') {
            $path = public_path() . '/images/';

            if ($path . $CMSAboutUsRealLeadership->lImage3) {
                if ($CMSAboutUsRealLeadership->lImage3 != '' && $CMSAboutUsRealLeadership->lImage3 != null) {
                    $file_old6 = $path . $CMSAboutUsRealLeadership->lImage3;
                    unlink($file_old6);
                }
            }
            $img6 = time() .'.'. $file6->getClientOriginalName();
            $path = $file6->storeAs('public/images', $img6);
            $request->lImage3->move(public_path('images/'), $img6);
            $request->lImage3 = $img6;
        }
        if ($file7 != '') {
            $path = public_path() . '/images/';

            if ($path . $CMSAboutUsRealLeadership->lImage4) {
                if ($CMSAboutUsRealLeadership->lImage4 != '' && $CMSAboutUsRealLeadership->lImage4 != null) {
                    $file_old7 = $path . $CMSAboutUsRealLeadership->lImage4;
                    unlink($file_old7);
                }
            }
            $img7 = time() .'.'. $file7->getClientOriginalName();
            $path = $file7->storeAs('public/images', $img7);
            $request->lImage4->move(public_path('images/'), $img7);
            $request->lImage4 = $img7;
        }

        $CMSAboutUsRealLeadership->update($request->all());

        $index = CMSAboutUsRealLeadership::orderBy('id', 'DESC')->first();

        if ($file1 != ''){
            $index->main_image = $img1;
            $index->save();
        }
        if ($file2 != ''){
            $index->image1 = $img2;
            $index->save();
        }
        if ($file3 != ''){
            $index->image2 = $img3;
            $index->save();
        }
        if ($file4 != ''){
            $index->lImage1 = $img4;
            $index->save();
        }
        if ($file5 != ''){
            $index->lImage2 = $img5;
            $index->save();
        }
        if ($file6 != ''){
            $index->lImage3 = $img6;
            $index->save();
        }
        if ($file7 != ''){
            $index->lImage4 = $img7;
            $index->save();
        }

        return redirect()->route('admin.about-us-leadership.index');
    }

}
