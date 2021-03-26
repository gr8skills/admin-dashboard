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

    public function update(UpdateMiddleSchoolRequest $request, MiddleSchool $middleSchool)
    {

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file1 = $request->file('pic1');
        $file2 = $request->file('pic2');


        if ($file1 != ''){
            $path = public_path() . '/images';

            if ($middleSchool->pic1 != '' && $middleSchool->pic1 != null){
                $file_old1 = $path.$middleSchool->pic1;
                unlink($file_old1);
            }
            $pic1 = time().'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $pic1);
            $request->pic1->move(public_path('images'), $pic1);
            $request->pic1 = $path;
        }
        if ($file2 != ''){
            $path = public_path() . '/images';

            if ($middleSchool->pic2 != '' && $middleSchool->pic2 != null){
                $file_old2 = $path.$middleSchool->pic2;
                unlink($file_old2);
            }
            $pic2 = time().'.'. $file2->getClientOriginalName();
            $path = $file2->storeAs('public/images', $pic2);
            $request->pic2->move(public_path('images'), $pic2);
            $request->pic2 = $path;
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

        return redirect()->route('admin.middleschool.index');
    }

}
