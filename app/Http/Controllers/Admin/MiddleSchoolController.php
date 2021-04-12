<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMiddleSchoolRequest;
use App\MiddleSchool;
Use Gate;
use Symfony\Component\HttpFoundation\Response;

class MiddleSchoolController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $middleschool = MiddleSchool::orderBy('id', 'DESC')
            ->first();
        return view('admin.middleschool.edit', compact('middleschool'));
    }

    public function update(UpdateMiddleSchoolRequest $request, $middleSchool)
    {

        $middleSchool = MiddleSchool::find($middleSchool);

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file1 = $request->file('pic1');
        $file2 = $request->file('pic2');
        $file4 = $request->file('pic3');
        $file3 = $request->file('main_img');


        if ($file1 != ''){
            $path = public_path() . '/images/';

            if ($path.$middleSchool->pic1){
                if ($middleSchool->pic1 != '' && $middleSchool->pic1 != null){
                    $file_old1 = $path.$middleSchool->pic1;
                    unlink($file_old1);
                }
            }
            
            $pic1 = time().'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $pic1);
            $request->pic1->move(public_path('images'), $pic1);
            $request->pic1 = $pic1;
        }
        if ($file2 != ''){
            $path = public_path() . '/images/';

            if ($path.$middleSchool->pic2){
                if ($middleSchool->pic2 != '' && $middleSchool->pic2 != null){
                    $file_old2 = $path.$middleSchool->pic2;
                    unlink($file_old2);
                }
            }
           
            $pic2 = time().'.'. $file2->getClientOriginalName();
            $path = $file2->storeAs('public/images', $pic2);
            $request->pic2->move(public_path('images'), $pic2);
            $request->pic2 = $pic2;
        }
        if ($file3 != ''){
            $path = public_path() . '/images/';

            if ($path.$middleSchool->main_img){
                if ($middleSchool->main_img != '' && $middleSchool->main_img != null){
                    $file_old3 = $path.$middleSchool->main_img;
                    unlink($file_old3);
                }
            }

            $pic3 = time().'.'. $file3->getClientOriginalName();
            $path = $file3->storeAs('public/images', $pic3);
            $request->main_img->move(public_path('images'), $pic3);
            $request->main_img = $pic3;
        }
        if ($file4 != ''){
            $path = public_path() . '/images/';

            if ($path.$middleSchool->pic3){
                if ($middleSchool->pic3 != '' && $middleSchool->pic3 != null){
                    $file_old4 = $path.$middleSchool->pic3;
                    unlink($file_old4);
                }
            }

            $pic4 = time().'.'. $file4->getClientOriginalName();
            $path = $file4->storeAs('public/images', $pic4);
            $request->pic3->move(public_path('images'), $pic4);
            $request->pic3 = $pic4;
        }


        $middleSchool->update($request->all());

        $index = MiddleSchool::orderBy('id', 'DESC')->first();
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
        if ($file4 != '') {
            $index->pic3 = $pic4;
            $index->save();
        }

        return redirect()->route('admin.middleschool.index');
    }

}
