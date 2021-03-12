<?php

namespace App\Http\Controllers;

use App\Http\Requests\MassDestroySettingsRequest;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreSettingsRequest;
use App\Http\Requests\UpdateSettingsRequest;
use App\SiteSettings;
use App\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SiteSettingsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('settings_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $settings = SiteSettings::all();
        return view('home', compact($settings));
    }

    public function create()
    {
        //
    }


    public function store(StoreSettingsRequest $request)
    {
        $settings = SiteSettings::create($request->all());
        return redirect()->route('home', compact($settings));
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

        return redirect()->route('home');
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
