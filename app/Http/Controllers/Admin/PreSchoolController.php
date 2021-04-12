<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePreSchoolRequest;
use App\PreSchool;
Use Gate;
use Symfony\Component\HttpFoundation\Response;

class PreSchoolController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $preschool = PreSchool::orderBy('id', 'DESC')
            ->first();
        return view('admin.preschool.edit', compact('preschool'));
    }

    public function update(UpdatePreSchoolRequest $request, $preSchool)
    {

        $preSchool = PreSchool::find($preSchool);

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file1 = $request->file('pic1');
        $file2 = $request->file('pic2');
        $file3 = $request->file('main_img');


        if ($file1 != ''){
            $path = public_path() . '/images/';

            if ($path.$preSchool->pic1){
                if ($preSchool->pic1 != '' && $preSchool->pic1 != null){
                    $file_old1 = $path.$preSchool->pic1;
                    unlink($file_old1);
                }
            }
            
            $pic1 = time().'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $pic1);
            $request->pic1->move(public_path('images'), $pic1);
            $request->pic1 = $pic1;
        }
        if ($file2 != ''){
            $path = public_path() . '/images';

            if ($path.$preSchool->pic2){
                if ($preSchool->pic2 != '' && $preSchool->pic2 != null){
                    $file_old2 = $path.$preSchool->pic2;
                    unlink($file_old2);
                }
            }
            
            $pic2 = time().'.'. $file2->getClientOriginalName();
            $path = $file2->storeAs('public/images', $pic2);
            $request->pic2->move(public_path('images'), $pic2);
            $request->pic2 = $pic2;
        }
        if ($file3 != ''){
            $path = public_path() . '/images';

            if ($path.$preSchool->main_img){
                if ($preSchool->main_img != '' && $preSchool->main_img != null){
                    $file_old3 = $path.$preSchool->main_img;
                    unlink($file_old3);
                }
            }

            $pic3 = time().'.'. $file3->getClientOriginalName();
            $path = $file3->storeAs('public/images', $pic3);
            $request->main_img->move(public_path('images'), $pic3);
            $request->main_img = $pic3;
        }


        $preSchool->update($request->all());

        $index = PreSchool::orderBy('id', 'DESC')->first();
        if ($file1 != ''){
            $index->pic1 = $pic1;
            $index->save();
        }
        if ($file2 != '') {
            $index->pic2 = $pic2;
            $index->save();
        }
        if ($file3 != '') {
            $index->main_img = $pic3;
            $index->save();
        }

        return redirect()->route('admin.preschool.index');
    }
}
