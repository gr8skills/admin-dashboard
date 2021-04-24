<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyImageGalleryRequest;
use App\Http\Requests\StoreImageGalleryRequest;
use App\Http\Requests\UpdateImageGalleryRequest;
use App\ImageGallery;
use Faker\Provider\Image;
use Gate;
use \Symfony\Component\HttpFoundation\Response;

class ImageGalleryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('gallery_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sliders = ImageGallery::all();
        return view('admin.gallery.index', compact('sliders'));
    }

    public function create()
    {
        $slider = ImageGallery::orderBy('id', 'asc')->first();
        abort_if(Gate::denies('gallery_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.gallery.create', compact('slider'));

    }

    public function store(StoreImageGalleryRequest $request)
    {
        $file = $request->file('name');
        $originalname =  time().'.'.$file->getClientOriginalName();
        $path = $file->storeAs('public/images', $originalname);
        $request->name->move(public_path('images'), $originalname);
        $request->name = $originalname;
        $slider = ImageGallery::create($request->all());
        $slider->name = $originalname;
        $slider->save();
        return redirect()->route('admin.gallery.index');
    }

    public function edit($slider)
    {
        $slider = ImageGallery::find($slider);
        abort_if(Gate::denies('gallery_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.gallery.edit', compact('slider'));
    }

    public function update(UpdateImageGalleryRequest $request, $slider)
    {

        $slider = ImageGallery::find($slider);

        $file = $request->file('name');

        if($file != '') {
            $path = public_path() . '/images/';

            if (file_exists($path . $slider->img1)) {
                if ($slider->name != '' && $slider->name != null) {
                    $file_old = $path . $slider->name;
                    unlink($file_old);
                }
            }

            //upload new file
            $originalname =  time().'.'.$file->getClientOriginalName();

            $path = $file->storeAs('public/images', $originalname);
            $request->name->move(public_path('images'), $originalname);
            $request->name = $originalname;

            $slider->update($request->all());
            $index = ImageGallery::orderBy('id', 'DESC')->first();

            if ($file != ''){
                $index->name = $originalname;
                $index->save();
            }

        }else{
            $slider->update($request->all());
        }
        return redirect()->route('admin.gallery.index');
    }

    public function show($slider)
    {
        $slider = ImageGallery::find($slider);
        abort_if(Gate::denies('gallery_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.gallery.show', compact('slider'));
    }

    public function destroy($slider)
    {
        abort_if(Gate::denies('gallery_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $slider = ImageGallery::find($slider);
        $path = public_path() . '/images/';

        if (file_exists($path . $slider->img1)) {
            if ($slider->name != '' && $slider->name != null) {
                $file_old = $path . $slider->name;
                unlink($file_old);
            }
        }

        $slider->delete();

        return back();
    }

    public function massDestroy(MassDestroyImageGalleryRequest $request)
    {
        ImageGallery::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
