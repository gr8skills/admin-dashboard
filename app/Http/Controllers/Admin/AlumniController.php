<?php

namespace App\Http\Controllers\Admin;

use App\AlumniSet;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAlumniRequest;
use App\Http\Requests\StoreAlumniRequest;
use App\Http\Requests\UpdateAlumniRequest;
use App\Alumni;
use Gate;
use \Symfony\Component\HttpFoundation\Response;

class AlumniController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sliders = Alumni::with(['set'])->get();
//        dd($sliders);
        return view('admin.alumni.index', compact('sliders'));
    }

    public function create()
    {
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $sets = AlumniSet::orderBy('id', 'asc')->get();
        $slider = AlumniSet::orderBy('id', 'asc')->first();
//        $slider = $setss->alumni();

        $start = 2005;
        $end = 2050;
        $ranges = [];
        for($i=$start; $i<= $end; $i++){
            $ranges[] += $i;
        }

        return view('admin.alumni.create', compact('slider', 'ranges', 'sets'));

    }

    public function store(StoreAlumniRequest $request)
    {
        $file = $request->file('pic');
        $originalpic =  time().'.'.$file->getClientOriginalName();
        $path = $file->storeAs('public/images', $originalpic);
        $request->pic->move(public_path('images'), $originalpic);
        $request->pic = $originalpic;
        $slider = Alumni::create($request->all());
        $slider->pic = $originalpic;
        $slider->save();
        return redirect()->route('admin.alumni.index');
    }

    public function edit($slider)
    {
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = Alumni::find($slider);
        $sets = AlumniSet::orderBy('id', 'asc')->get();
        return view('admin.alumni.edit', compact('slider', 'sets'));
    }

    public function update(UpdateAlumniRequest $request, $slider)
    {

        $slider = Alumni::find($slider);

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
            $index = Alumni::orderBy('id', 'DESC')->first();

            if ($file != ''){
                $index->pic = $originalpic;
                $index->save();
            }

        }else{
            $slider->update($request->all());
        }
        return redirect()->route('admin.alumni.index');
    }

    public function show($slider)
    {
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = Alumni::find($slider);
        return view('admin.alumni.show', compact('slider'));
    }

    public function destroy($slider)
    {
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = Alumni::find($slider);
        $path = public_path() . '/images/';
        if (file_exists($path . $slider->pic)) {
            if ($slider->pic != '' && $slider->pic != null) {
                $file_old = $path . $slider->pic;
                unlink($file_old);
            }
        }
        $slider->delete();
        return back();
    }

    public function massDestroy(MassDestroyAlumniRequest $request)
    {
        Alumni::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
