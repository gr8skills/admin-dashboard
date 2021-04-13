<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateChildProtectionRequest;
use App\ChildProtection;
Use Gate;
use Symfony\Component\HttpFoundation\Response;

class ChildProtectionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $protection = ChildProtection::orderBy('id', 'DESC')
            ->first();
        return view('admin.childprotection.edit', compact('protection'));
    }

    public function update(UpdateChildProtectionRequest $request, $protection)
    {

        $protection = ChildProtection::find($protection);
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file1 = $request->file('pic1');
        $file2 = $request->file('pic2');
        $file3 = $request->file('pic3');
        $file4 = $request->file('main_img');


        if ($file1 != ''){
            $path = public_path() . '/images/';

            if (file_exists($path.$protection->pic1) ){
                if ($protection->pic1 != '' && $protection->pic1 != null){
                    $file_old1 = $path.$protection->pic1;
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

            if (file_exists($path.$protection->pic2)){
                if ($protection->pic2 != '' && $protection->pic2 != null){
                    $file_old2 = $path.$protection->pic2;
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

            if (file_exists($path.$protection->pic3)){
                if ($protection->pic3 != '' && $protection->pic3 != null){
                    $file_old3 = $path.$protection->pic3;
                    unlink($file_old3);
                }
            }

            $pic3 = time().'.'. $file3->getClientOriginalName();
            $path = $file3->storeAs('public/images', $pic3);
            $request->pic3->move(public_path('images'), $pic3);
            $request->pic3 = $pic3;
        }
        if ($file4 != ''){
            $path = public_path() . '/images/';

            if (file_exists($path.$protection->main_img)){
                if ($protection->main_img != '' && $protection->main_img != null){
                    $file_old4 = $path.$protection->main_img;
                    unlink($file_old4);
                }
            }

            $main_img = time().'.'. $file4->getClientOriginalName();
            $path = $file4->storeAs('public/images', $main_img);
            $request->main_img->move(public_path('images'), $main_img);
            $request->main_img = $main_img;
        }


        $protection->update($request->all());

        $index = ChildProtection::orderBy('id', 'DESC')->first();
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
        if ($file4 != '') {
            $index->main_img = $main_img;
            $index->save();
        }

        return redirect()->route('admin.childprotection.index');
    }

}
