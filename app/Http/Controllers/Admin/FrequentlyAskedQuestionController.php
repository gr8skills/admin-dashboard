<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFAQRequest;
use App\Http\Requests\StoreFAQRequest;
use App\Http\Requests\UpdateFAQRequest;
use App\FrequentlyAskedQuestion;
use Gate;
use \Symfony\Component\HttpFoundation\Response;

class FrequentlyAskedQuestionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('faq_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $sliders = FrequentlyAskedQuestion::all();
        return view('admin.faq.index', compact('sliders'));
    }

    public function create()
    {
        abort_if(Gate::denies('faq_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = FrequentlyAskedQuestion::orderBy('id', 'desc')->first();
        return view('admin.faq.create', compact('slider'));

    }

    public function store(StoreFAQRequest $request)
    {
        /*
        $file = $request->file('pic');
        $originalpic =  time().'.'.$file->getClientOriginalName();
        $path = $file->storeAs('public/images', $originalpic);
        $request->pic->move(public_path('images'), $originalpic);
        $request->pic = $originalpic;
        */

        /*
        $slider->pic = $originalpic;
        $slider->save();
        */
        $slider = FrequentlyAskedQuestion::create($request->all());
        return redirect()->route('admin.faq.index');
    }

    public function edit($slider)
    {
        abort_if(Gate::denies('faq_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = FrequentlyAskedQuestion::find($slider);
        return view('admin.faq.edit', compact('slider'));
    }

    public function update(UpdateFAQRequest $request, $slider)
    {

        $slider = FrequentlyAskedQuestion::find($slider);
        $slider->update($request->all());

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
//            $index = Alumni::orderBy('id', 'DESC')->first();
//
//            if ($file != ''){
//                $index->pic = $originalpic;
//                $index->save();
//            }
//
//        }else{

        return redirect()->route('admin.faq.index');
    }

    public function show($slider)
    {
        abort_if(Gate::denies('faq_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = FrequentlyAskedQuestion::find($slider);
        return view('admin.faq.show', compact('slider'));
    }

    public function destroy($slider)
    {
        abort_if(Gate::denies('faq_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = FrequentlyAskedQuestion::find($slider);
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

    public function massDestroy(MassDestroyFAQRequest $request)
    {
        FrequentlyAskedQuestion::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
