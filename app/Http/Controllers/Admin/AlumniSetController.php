<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAlumniSetRequest;
use App\Http\Requests\StoreAlumniSetRequest;
use App\Http\Requests\UpdateAlumniSetRequest;
use App\AlumniSet;
use Gate;
use \Symfony\Component\HttpFoundation\Response;

class AlumniSetController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sliders = AlumniSet::all();
        return view('admin.alumni-set.index', compact('sliders'));
    }

    public function create()
    {
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = AlumniSet::orderBy('id', 'asc')->first();
        $start = 2005;
        $end = 2050;
        $ranges = [];
        for($i=$start; $i<= $end; $i++){
           $ranges[] += $i;
        }

        return view('admin.alumni-set.create', compact('slider', 'ranges'));

    }

    public function store(StoreAlumniSetRequest $request)
    {
        $file = $request->file('main_img');
        $originalmain_img =  time().'.'.$file->getClientOriginalName();
        $path = $file->storeAs('public/images', $originalmain_img);
        $request->main_img->move(public_path('images'), $originalmain_img);
        $request->main_img = $originalmain_img;
        $slider = AlumniSet::create($request->all());
        $slider->main_img = $originalmain_img;
        $slider->save();
        return redirect()->route('admin.alumni-set.index');
    }

    public function edit($slider)
    {
        $start = 2005;
        $end = 2050;
        $ranges = [];
        for($i=$start; $i<= $end; $i++){
            $ranges[] += $i;
        }
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = AlumniSet::find($slider);
        return view('admin.alumni-set.edit', compact('slider', 'ranges'));
    }

    public function update(UpdateAlumniSetRequest $request, $slider)
    {

        $slider = AlumniSet::find($slider);

        $file = $request->file('main_img');

        if($file != '') {
            $path = public_path() . '/images/';

            if (file_exists($path . $slider->img1)) {
                if ($slider->main_img != '' && $slider->main_img != null) {
                    $file_old = $path . $slider->main_img;
                    unlink($file_old);
                }
            }

            //upload new file
            $originalmain_img =  time().'.'.$file->getClientOriginalmain_img();

            $path = $file->storeAs('public/images', $originalmain_img);
            $request->main_img->move(public_path('images'), $originalmain_img);
            $request->main_img = $originalmain_img;

            $slider->update($request->all());
            $index = AlumniSet::orderBy('id', 'DESC')->first();

            if ($file != ''){
                $index->main_img = $originalmain_img;
                $index->save();
            }

        }else{
            $slider->update($request->all());
        }
        return redirect()->route('admin.alumni-set.index');
    }

    public function show($slider)
    {
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = AlumniSet::find($slider);
        return view('admin.alumni-set.show', compact('slider'));
    }

    public function destroy($slider)
    {
        abort_if(Gate::denies('alumni_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = AlumniSet::find($slider);
        $path = public_path() . '/images/';
        if (file_exists($path . $slider->main_img)) {
            if ($slider->main_img != '' && $slider->main_img != null) {
                $file_old = $path . $slider->main_img;
                unlink($file_old);
            }
        }
        $slider->delete();
        return back();
    }

    public function massDestroy(MassDestroyAlumniSetRequest $request)
    {
        AlumniSet::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
