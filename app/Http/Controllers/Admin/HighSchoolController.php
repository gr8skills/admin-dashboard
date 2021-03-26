<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateHighSchoolRequest;
use App\HighSchool;
Use Gate;
use Symfony\Component\HttpFoundation\Response;

class HighSchoolController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $highschool = HighSchool::orderBy('id', 'DESC')
            ->first();
        return view('admin.highschool.edit', compact('highschool'));
    }

    public function update(UpdateHighSchoolRequest $request, HighSchool $highSchool)
    {

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file1 = $request->file('pic1');
        $file2 = $request->file('pic2');
        $file3 = $request->file('pic3');


        if ($file1 != ''){
            $path = public_path() . '/images';

            if ($highSchool->pic1 != '' && $highSchool->pic1 != null){
                $file_old1 = $path.$highSchool->pic1;
                unlink($file_old1);
            }
            $pic1 = time().'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $pic1);
            $request->pic1->move(public_path('images'), $pic1);
            $request->pic1 = $path;
        }
        if ($file2 != ''){
            $path = public_path() . '/images';

            if ($highSchool->pic2 != '' && $highSchool->pic2 != null){
                $file_old2 = $path.$highSchool->pic2;
                unlink($file_old2);
            }
            $pic2 = time().'.'. $file2->getClientOriginalName();
            $path = $file2->storeAs('public/images', $pic2);
            $request->pic2->move(public_path('images'), $pic2);
            $request->pic2 = $path;
        }
        if ($file3 != ''){
            $path = public_path() . '/images';

            if ($highSchool->pic3 != '' && $highSchool->pic3 != null){
                $file_old3 = $path.$highSchool->pic3;
                unlink($file_old3);
            }
            $pic3 = time().'.'. $file3->getClientOriginalName();
            $path = $file3->storeAs('public/images', $pic3);
            $request->pic3->move(public_path('images'), $pic3);
            $request->pic3 = $path;
        }


        $highSchool->update($request->all());

        $index = HighSchool::orderBy('id', 'DESC')->first();
        if ($file1 != ''){
            $index->pic1 = $pic1;
            $index->save();
        }
        if ($file2 != '') {
            $index->pic2 = $pic2;
            $index->save();
        }
        if ($file3 != '') {
            $index->pic3 = $pic3;
            $index->save();
        }

        return redirect()->route('admin.highschool.index');
    }

}
