<?php

namespace App\Http\Controllers\Admin;

use App\CareerFixed;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCareerRequest;
use App\Http\Requests\StoreCareerRequest;
use App\Http\Requests\UpdateCareerRequest;
use App\Career;
use Gate;
use \Symfony\Component\HttpFoundation\Response;

class CareerController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('career_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $sliders = Career::all();
        return view('admin.career.index', compact('sliders'));
    }

    public function create()
    {
        abort_if(Gate::denies('career_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = Career::orderBy('id', 'desc')->first();
        $sliderFixed = CareerFixed::orderBy('id', 'desc')->first();
        return view('admin.career.create', compact('slider', 'sliderFixed'));

    }

    public function store(StoreCareerRequest $request)
    {

//        $file = $request->file('pic');
//        $originalpic =  time().'.'.$file->getClientOriginalName();
//        $path = $file->storeAs('public/images', $originalpic);
//        $request->pic->move(public_path('images'), $originalpic);
//        $request->pic = $originalpic;
        $slider = Career::create($request->all());

//        $slider->pic = $originalpic;
//        $slider->save();


        return redirect()->route('admin.career.index');
    }

    public function edit($slider)
    {
        abort_if(Gate::denies('career_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = Career::find($slider);
        return view('admin.career.edit', compact('slider'));
    }

    public function update(UpdateCareerRequest $request, $slider)
    {

        $slider = Career::find($slider);


//        $file = $request->file('pic');
//
//        if($file != '') {
//            $path = public_path() . '/images/';
//
//            if (file_exists($path . $slider->img1)) {
//                if ($slider->pic != '' && $slider->pic != null) {
//                    $file_old = $path . $slider->pic;
//                    unlink($file_old);
//                }
//            }
//
//            //upload new file
//            $originalpic =  time().'.'.$file->getClientOriginalpic();
//
//            $path = $file->storeAs('public/images', $originalpic);
//            $request->pic->move(public_path('images'), $originalpic);
//            $request->pic = $originalpic;
//
//            $slider->update($request->all());
//            $index = Career::orderBy('id', 'DESC')->first();
//
//            if ($file != ''){
//                $index->pic = $originalpic;
//                $index->save();
//            }
//
//        }else{
            $slider->update($request->all());


        return redirect()->route('admin.career.index');
    }

    public function show($slider)
    {
        abort_if(Gate::denies('career_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = Career::find($slider);
        return view('admin.career.show', compact('slider'));
    }

    public function destroy($slider)
    {
        abort_if(Gate::denies('career_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = Career::find($slider);
//        $path = public_path() . '/images/';
//        if (file_exists($path . $slider->pic)) {
//            if ($slider->pic != '' && $slider->pic != null) {
//                $file_old = $path . $slider->pic;
//                unlink($file_old);
//            }
//        }
        $slider->delete();
        return back();
    }

    public function massDestroy(MassDestroyCareerRequest $request)
    {
        Career::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
