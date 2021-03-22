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

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\CMSAboutUsLeadership  $cMSAboutUsLeadership
     */
    public function update(UpdateAboutUsLeadershipRequest $request, CMSAboutUsLeadership $cMSAboutUsLeadership)
    {
        dd($request->all());
        //
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $principalImage = $request->file('principal_image');
        $principalImageS = $request->file('principal_image');

        if(!is_null($principalImage))
            $principalImage =  time().'.'.$principalImage->getClientOriginalName();

        if(!is_null($principalImage))
            $path = $principalImageS->storeAs('public/images', $principalImage);
        else
            $path = '';

        if(!is_null($principalImage))
            $request->principal_image->move(public_path('images'), $principalImage);


        $request->principal_image = $path;


        $index = CMSAboutUsLeadership::update($request->all());
        $index->principal_image = $principalImage;
        $index->save();
        return redirect()->route('admin.leadershipCMS.index');
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
