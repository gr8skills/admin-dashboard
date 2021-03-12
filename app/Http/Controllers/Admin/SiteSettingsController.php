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
//        dd($request->all());
        $settings = SiteSettings::create($request->all());
        return redirect()->route('admin.sitesettings.index', compact($settings));
    }


    public function show(SiteSettings $siteSettings)
    {
        //
    }


    public function edit(SiteSettings $siteSettings)
    {


    }


    public function update(UpdateSettingsRequest $request, SiteSettings $siteSettings)
    {
        abort_if(Gate::denies('settings_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $siteSettings->update($request->all());

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
