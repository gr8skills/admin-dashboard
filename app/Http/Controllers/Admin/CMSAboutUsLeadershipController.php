<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\CMSAboutUsLeadership;
use App\Http\Requests\UpdateAboutUsLeadershipRequest;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class CMSAboutUsLeadershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        //
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $leadership = CMSAboutUsLeadership::orderBy('id', 'DESC')
            ->first();

        return view('admin.leadershipCMS.edit', compact('leadership'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CMSAboutUsLeadership  $cMSAboutUsLeadership
     */
    public function show(CMSAboutUsLeadership $cMSAboutUsLeadership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CMSAboutUsLeadership  $cMSAboutUsLeadership
     */
    public function edit(CMSAboutUsLeadership $cMSAboutUsLeadership)
    {
        //
    }


    public function update(UpdateAboutUsLeadershipRequest $request, CMSAboutUsLeadership $cMSAboutUsLeadership)
    {



        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file = $request->file('principal_image');

        if ($file != ''){
            $path = public_path() . '/images';

            if ($cMSAboutUsLeadership->principal_image != '' && $cMSAboutUsLeadership->principal_image != null){
                $file_old = $path.$cMSAboutUsLeadership->principal_image;
                unlink($file_old);
            }
            $principalImage =  $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $principalImage);
            $request->principal_image->move(public_path('images'), $principalImage);
            $request->principal_image = $path;
            $cMSAboutUsLeadership->update($request->all());
            $index = CMSAboutUsLeadership::orderBy('id', 'DESC')->first();
            $index->principal_image = $principalImage;
            $index->save();

        }

        return redirect()->route('admin.about-us-principals-welcome.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CMSAboutUsLeadership  $cMSAboutUsLeadership
     */
    public function destroy(CMSAboutUsLeadership $cMSAboutUsLeadership)
    {
        //
    }
}
