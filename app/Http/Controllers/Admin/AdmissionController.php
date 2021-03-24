<?php

namespace App\Http\Controllers\Admin;

use App\Admission;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAdmissionRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class AdmissionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $admission = Admission::orderBy('id', 'DESC')
            ->first();
        return view('admin.admission.edit', compact('admission'));

    }

    public function update(UpdateAdmissionRequest $request, Admission $admission)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file1 = $request->file('image1');
        $file2 = $request->file('image2');

        if ($file1 != '' || $file2 != ''){
            $path = public_path() . '/images';

//            if ($admission->image1 != '' && $admission->image1 != null){
//                $file_old1 = $path.$admission->image1;
//                unlink($file_old1);
//            }
            if ($file1 != ''){
                $image1 =  $file1->getClientOriginalName();
                $path1 = $file1->storeAs('public/images', $image1);
                $request->image1->move(public_path('images'), $image1);
                $request->image1 = $path1;
                $admission->update($request->all());
                $index = Admission::orderBy('id', 'DESC')->first();
                $index->image1 = $image1;
                $index->save();
            }

//            if ($admission->image2 != '' && $admission->image2 != null){
//                $file_old2 = $path.$admission->image2;
//                unlink($file_old2);
//            }
            if ($file2 != ''){
                $image2 =  $file2->getClientOriginalName();
                $path2 = $file2->storeAs('public/images', $image2);
                $request->image2->move(public_path('images'), $image2);
                $request->image2 = $path2;
                $admission->update($request->all());
                $index = Admission::orderBy('id', 'DESC')->first();
                $index->image2 = $image2;
                $index->save();
            }


        }
        return redirect()->route('admin.admission.index');

    }
}
