<?php

namespace App\Http\Controllers\Admin;

use App\Career;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCareerFixedRequest;
use App\Http\Requests\UpdateCareerRequest;
use App\CareerFixed;
use Gate;
use \Symfony\Component\HttpFoundation\Response;

class CareerFixedController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('career_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $sliders = Career::all();
        return view('admin.career.index', compact('sliders'));
    }

    public function update(UpdateCareerFixedRequest $request, $slider)
    {

        $slider = CareerFixed::find($slider);


        $file = $request->file('pic');

        if($file != '') {
            $path = public_path() . '/images/';

            if (file_exists($path . $slider->img1)) {
                if ($slider->pic != '' && $slider->pic != null) {
                    $file_old = $path . $slider->pic;
                    unlink($file_old);
                }
            }

            //upload new file
            $originalpic =  time().'.'.$file->getClientOriginalpic();

            $path = $file->storeAs('public/images', $originalpic);
            $request->pic->move(public_path('images'), $originalpic);
            $request->pic = $originalpic;

            $slider->update($request->all());
            $index = CareerFixed::orderBy('id', 'DESC')->first();

            if ($file != ''){
                $index->pic = $originalpic;
                $index->save();
            }

        }else{
            $slider->update($request->all());
        }

        return redirect()->route('admin.careerfixed.index');
    }
}
