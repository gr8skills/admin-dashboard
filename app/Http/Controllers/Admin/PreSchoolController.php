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

    public function update(UpdatePreSchoolRequest $request, PreSchool $preSchool)
    {

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file1 = $request->file('pic1');
        $file2 = $request->file('pic2');


        if ($file1 != ''){
            $path = public_path() . '/images';

            if ($preSchool->pic1 != '' && $preSchool->pic1 != null){
                $file_old1 = $path.$preSchool->pic1;
                unlink($file_old1);
            }
            $pic1 = time().'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $pic1);
            $request->pic1->move(public_path('images'), $pic1);
            $request->pic1 = $path;
        }
        if ($file2 != ''){
            $path = public_path() . '/images';

            if ($preSchool->pic2 != '' && $preSchool->pic2 != null){
                $file_old2 = $path.$preSchool->pic2;
                unlink($file_old2);
            }
            $pic2 = time().'.'. $file2->getClientOriginalName();
            $path = $file2->storeAs('public/images', $pic2);
            $request->pic2->move(public_path('images'), $pic2);
            $request->pic2 = $path;
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

        return redirect()->route('admin.preschool.index');
    }
}
