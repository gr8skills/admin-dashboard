<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySettingsRequest;
use App\Http\Requests\StoreSettingsRequest;
use App\Http\Requests\UpdateSettingsRequest;
use App\SiteSettings;
use Illuminate\Http\Request;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class SiteSettingsController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('settings_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $settings = SiteSettings::where('active_setting', 1)
        ->orderBy('id', 'DESC')
        ->first();
        $tabs = [
            'General',
            'Main Menu',
            'Sliders'
        ];

        return view('home', compact('settings', 'tabs'));
    }

    public function create()
    {
        //
    }


    public function store(StoreSettingsRequest $request)
    {

        $file = $request->file('school_logo');
        if($file != '') {
            $path = public_path() . '/images';

            $settings = SiteSettings::create($request->all());

//            //code for remove old file
//            if ($settings->school_logo != '' && $settings->school_logo != null) {
//                $file_old = $path . $settings->school_logo;
//                if (!is_null($file_old))
//                    unlink($file_old);
//            }

            //upload new file
//            $originalname =  time().'.'.$file->getClientOriginalName();
            $originalname =  'logo.png';

            $path = $file->storeAs('public/images', $originalname);
            $request->school_logo->move(public_path('images'), $originalname);
            $request->school_logo = $path;

            $settings->school_logo = $originalname;
            $settings->save();
        }
        $settings = SiteSettings::orderBy('id', 'DESC')->first();

//        $originalname = $file->getClientOriginalName();
//        $path = $file->storeAs('public/images', $originalname);
//        $request->school_logo->move(public_path('images'), $originalname);
//        $request->school_logo = $path;
//        $settings = SiteSettings::create($request->all());
//        $settings->school_logo = $originalname;
//        $settings->save();
        return redirect()->route('admin.sitesettings.index', compact($settings));
    }


    public function show(SiteSettings $siteSettings)
    {
        //
    }


    public function edit(SiteSettings $siteSettings)
    {


    }


    public function update(UpdateSettingsRequest $request,  $siteSettings)
    {

        $siteSettings = SiteSettings::find($siteSettings);
        abort_if(Gate::denies('settings_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file = $request->file('school_logo');

        if($file != '') {
            $path = public_path() . '/images/';

            if (file_exists($path.$siteSettings->school_logo)){
                if ($siteSettings->school_logo != '' && $siteSettings->school_logo != null) {
                    $file_old = $path . $siteSettings->school_logo;
                    unlink($file_old);
                }
            }


            //upload new file
//            $originalname =  time().'.'.$file->getClientOriginalName();
            $originalname =  'logo.png';

            $path = $file->storeAs('public/images', $originalname);
            $request->school_logo->move(public_path('images'), $originalname);
            $request->school_logo = $path;



            $siteSettings = SiteSettings::where('active_setting', 1)
                ->orderBy('id', 'DESC')
                ->first();

            $siteSettings->update($request->all());
            $siteSettings = SiteSettings::orderBy('id', 'DESC')->first();
            $siteSettings->school_logo = $originalname;
            $siteSettings->save();
        }else{

            $siteSettings->update($request->all());
        }

        return redirect()->route('admin.sitesettings.index');
    }


    public function destroy(SiteSettings $siteSettings)
    {
        //
    }

    public function massDestroy(MassDestroySettingsRequest $request)
    {
        SiteSettings::whereIn('id', request('ids'))->delete();

        return response(null, \Symfony\Component\HttpFoundation\Response::HTTP_NO_CONTENT);

    }
}
