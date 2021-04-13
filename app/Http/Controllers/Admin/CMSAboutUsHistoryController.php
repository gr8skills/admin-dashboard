<?php


namespace App\Http\Controllers\Admin;

use App\AboutUs;
use App\CMSAboutUsHistory;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutUsHistoryRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class CMSAboutUsHistoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $history = CMSAboutUsHistory::orderBy('id', 'DESC')
            ->first();

        return view('admin.historyEdit.edit', compact('history'));
    }

    public function update(UpdateAboutUsHistoryRequest $request,  $CMSAboutUsHistory)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file1 = $request->file('main_img');

        $CMSAboutUsHistory = CMSAboutUsHistory::find($CMSAboutUsHistory);

        if ($file1 != ''){
            $path = public_path() . '/images/';

            if (file_exists($path.$CMSAboutUsHistory->main_img)){
                if ($CMSAboutUsHistory->main_img != '' && $CMSAboutUsHistory->main_img != null){
                    $file_old1 = $path.$CMSAboutUsHistory->main_img;
                    unlink($file_old1);
                }
            }

            $main_img = time().'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $main_img);
            $request->main_img->move(public_path('images'), $main_img);
            $request->main_img = $main_img;
        }

        $CMSAboutUsHistory->update($request->all());

        $index = CMSAboutUsHistory::orderBy('id', 'DESC')->first();
        if ($file1 != ''){
            $index->main_img = $main_img;
            $index->save();
        }
        return redirect()->route('admin.about-us-history.index');
    }
}
