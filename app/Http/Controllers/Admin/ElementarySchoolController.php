<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateElementarySchoolRequest;
use App\ElementarySchool;
Use Gate;
use Symfony\Component\HttpFoundation\Response;
class ElementarySchoolController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $elementary = ElementarySchool::orderBy('id', 'DESC')
            ->first();
        return view('admin.elementaryschool.edit', compact('elementary'));
    }

    public function update(UpdateElementarySchoolRequest $request,  $elementarySchool)
    {
        $elementarySchool = ElementarySchool::find($elementarySchool);
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file1 = $request->file('pic1');
        $file2 = $request->file('pic2');
        $file3 = $request->file('main_img');


        if ($file1 != ''){
            $path = public_path() . '/images/';

            if ($path.$elementarySchool->pic1){
                if ($elementarySchool->pic1 != '' && $elementarySchool->pic1 != null){
                    $file_old1 = $path.$elementarySchool->pic1;
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

            if ($path.$elementarySchool->pic2){
                if ($elementarySchool->pic2 != '' && $elementarySchool->pic2 != null){
                    $file_old2 = $path.$elementarySchool->pic2;
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

            if ($path.$elementarySchool->main_img){
                if ($elementarySchool->main_img != '' && $elementarySchool->main_img != null){
                    $file_old3 = $path.$elementarySchool->main_img;
                    unlink($file_old3);
                }
            }

            $pic3 = time().'.'. $file3->getClientOriginalName();
            $path = $file3->storeAs('public/images', $pic3);
            $request->main_img->move(public_path('images'), $pic3);
            $request->main_img = $pic3;
        }


        $elementarySchool->update($request->all());

        $index = ElementarySchool::orderBy('id', 'DESC')->first();
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

        return redirect()->route('admin.elementaryschool.index');
    }
}
