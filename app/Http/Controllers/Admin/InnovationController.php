<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateInnovationRequest;
use App\Innovation;
Use Gate;
use Symfony\Component\HttpFoundation\Response;

class InnovationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $innovation = Innovation::orderBy('id', 'DESC')
            ->first();
        return view('admin.innovation.edit', compact('innovation'));
    }

    public function update(UpdateInnovationRequest $request, $innovation)
    {
        $innovation = Innovation::find($innovation);

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file1 = $request->file('pic1');
        $file2 = $request->file('main_img');

        if ($file1 != ''){
            $path = public_path() . '/images/';

            if (file_exists($path.$innovation->pic1)){
                if ($innovation->pic1 != '' && $innovation->pic1 != null){
                    $file_old1 = $path.$innovation->pic1;
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

            if (file_exists($path.$innovation->main_img)){
                if ($innovation->main_img != '' && $innovation->main_img != null){
                    $file_old2 = $path.$innovation->main_img;
                    unlink($file_old2);
                }
            }

            $main_img = time().'.'. $file2->getClientOriginalName();
            $path = $file2->storeAs('public/images', $main_img);
            $request->main_img->move(public_path('images'), $main_img);
            $request->main_img = $main_img;
        }

        $innovation->update($request->all());

        $index = Innovation::orderBy('id', 'DESC')->first();
        if ($file1 != ''){
            $index->pic1 = $pic1;
            $index->save();
        }
        if ($file2 != ''){
            $index->main_img = $main_img;
            $index->save();
        }


        return redirect()->route('admin.innovation.index');
    }

}
