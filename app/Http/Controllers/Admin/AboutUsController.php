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

    public function update(UpdateAboutUsRequest $request, $aboutUs)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        $about = AboutUs::find($aboutUs);

        $file1 = $request->file('img1');

        if ($file1 != '') {
            $path = public_path() . '/images/';

            if (file_exists($path . $about->img1) ) {
                if ($about->img1 != '' && $about->img1 != null) {
                    $file_old1 = $path . $about->img1;
                    unlink($file_old1);
                }
            }
            $img1 = time() .'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $img1);
            $request->img1->move(public_path('images/'), $img1);
            $request->img1 = $img1;
        }

        $about->update($request->all());


        $index = AboutUs::orderBy('id', 'DESC')->first();

        if ($file1 != ''){
            $index->img1 = $img1;
            $index->save();
        }

        return redirect()->route('admin.aboutus.index');

    }

}
