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

    public function update(UpdateInnovationRequest $request, Innovation $innovation)
    {

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file1 = $request->file('pic1');

        if ($file1 != ''){
            $path = public_path() . '/images';

            if ($innovation->pic1 != '' && $innovation->pic1 != null){
                $file_old1 = $path.$innovation->pic1;
                unlink($file_old1);
            }
            $pic1 = time().'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $pic1);
            $request->pic1->move(public_path('images'), $pic1);
            $request->pic1 = $path;
        }


        $innovation->update($request->all());

        $index = Innovation::orderBy('id', 'DESC')->first();
        if ($file1 != ''){
            $index->pic1 = $pic1;
            $index->save();
        }


        return redirect()->route('admin.innovation.index');
    }

}
