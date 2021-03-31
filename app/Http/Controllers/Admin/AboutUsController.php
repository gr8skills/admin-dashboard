<?php

namespace App\Http\Controllers\Admin;

use App\AboutUs;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutUsRequest;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\HttpFoundation\Response;
use Gate;
use Intervention\Image\Facades\Image;

class AboutUsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $about = AboutUs::orderBy('id', 'DESC')
            ->first();
        return view('admin.aboutus.edit', compact('about'));
    }

    public function update(UpdateAboutUsRequest $request, AboutUs $aboutUs)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
//        if($request->img != '' ) {
//            $f = $request->img;
////            $att = new Attachment;
//            $att->name = $f->getClientOriginalName();
//            $att->file = base64_encode(file_get_contents($f->getRealPath()));
//            $att->mime = $f->getMimeType();
//            $att->size = $f->getSize();
//            $request->img = $att;
//        }

        $about = AboutUs::orderBy('id', 'DESC')
            ->first();
        $about->update($request->all());
        return redirect()->route('admin.aboutus.index');

    }

}
