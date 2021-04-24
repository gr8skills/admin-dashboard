<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEventRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Events;
use Gate;
use \Symfony\Component\HttpFoundation\Response;

class EventsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('events_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $sliders = Events::all();
        return view('admin.events.index', compact('sliders'));
    }

    public function create()
    {
        abort_if(Gate::denies('events_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = Events::orderBy('id', 'asc')->first();

        return view('admin.events.create', compact('slider'));

    }

    public function store(StoreEventRequest $request)
    {
        $file = $request->file('pic');
        $originalpic =  time().'.'.$file->getClientOriginalName();
        $path = $file->storeAs('public/images', $originalpic);
        $request->pic->move(public_path('images'), $originalpic);
        $request->pic = $originalpic;
        $slider = Events::create($request->all());
        $slider->pic = $originalpic;
        $slider->save();
        return redirect()->route('admin.events.index');
    }

    public function edit($slider)
    {
        abort_if(Gate::denies('events_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = Events::find($slider);
        return view('admin.events.edit', compact('slider'));
    }

    public function update(UpdateEventRequest $request, $slider)
    {

        $slider = Events::find($slider);

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
            $index = Events::orderBy('id', 'DESC')->first();

            if ($file != ''){
                $index->pic = $originalpic;
                $index->save();
            }

        }else{
            $slider->update($request->all());
        }
        return redirect()->route('admin.events.index');
    }

    public function show($slider)
    {
        abort_if(Gate::denies('events_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = Events::find($slider);
        return view('admin.events.show', compact('slider'));
    }

    public function destroy($slider)
    {
        abort_if(Gate::denies('events_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = Events::find($slider);
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

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Events::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
