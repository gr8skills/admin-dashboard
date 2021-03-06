<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySliderRequest;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Slider;
use Gate;
use \Symfony\Component\HttpFoundation\Response;

class SliderController extends Controller
{
    //
    public function index()
    {
        abort_if(Gate::denies('slider_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        $slider = Slider::orderBy('id', 'asc')->first();
        abort_if(Gate::denies('slider_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.sliders.create', compact('slider'));

    }

    public function store(StoreSliderRequest $request)
    {
        $file = $request->file('location');
        $originalname =  time().'.'.$file->getClientOriginalName();
        $path = $file->storeAs('public/images/slides', $originalname);
        $request->location->move(public_path('images/slides'), $originalname);
        $request->location = $originalname;
        $slider = Slider::create($request->all());
        $slider->location = $originalname;
        $slider->save();
        return redirect()->route('admin.sliders.index');
    }

    public function edit(Slider $slider)
    {
        abort_if(Gate::denies('slider_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(UpdateSliderRequest $request, $slider)
    {

        $slider = Slider::find($slider);

        $file = $request->file('location');

        if($file != '') {
            $path = public_path() . '/images/slides/';

            if (file_exists($path . $slider->img1)) {
                if ($slider->location != '' && $slider->location != null) {
                    $file_old = $path . $slider->location;
                    unlink($file_old);
                }
            }

            //upload new file
            $originalname =  time().'.'.$file->getClientOriginalName();

            $path = $file->storeAs('public/images/slides', $originalname);
            $request->location->move(public_path('images/slides'), $originalname);
            $request->location = $originalname;

            $slider->update($request->all());
            $index = Slider::orderBy('id', 'DESC')->first();

            if ($file != ''){
                $index->location = $originalname;
                $index->save();
            }

        }else{
            $slider->update($request->all());
        }
        return redirect()->route('admin.sliders.index');
    }

    public function show(Slider $slider)
    {
        abort_if(Gate::denies('slider_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sliders.show', compact('slider'));
    }

    public function destroy($slider)
    {
        abort_if(Gate::denies('slider_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $slider = Slider::find($slider);
        $path = public_path() . '/images/slides/';

        if (file_exists($path . $slider->img1)) {
            if ($slider->location != '' && $slider->location != null) {
                $file_old = $path . $slider->location;
                unlink($file_old);
            }
        }
        $slider->delete();

        return back();
    }

    public function massDestroy(MassDestroySliderRequest $request)
    {
        Slider::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
