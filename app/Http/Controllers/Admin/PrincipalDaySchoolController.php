<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PrincipalDaySchool;
use App\Http\Requests\UpdatePrincipalDaySchoolRequest;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class PrincipalDaySchoolController extends Controller
{
    public function index()
    {
        //
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $leadership = PrincipalDaySchool::orderBy('id', 'DESC')
            ->first();

        return view('admin.principal-day.edit', compact('leadership'));
    }

    public function update(UpdatePrincipalDaySchoolRequest $request, $principal)
    {

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $principalWelcome = PrincipalDaySchool::find($principal);

        $file = $request->file('principal_image');
        $file1 = $request->file('img1');

        if ($file != '') {
            $path = public_path() . '/images/';

            if (file_exists($path . $principalWelcome->principal_image)) {
                if ($principalWelcome->principal_image != '' && $principalWelcome->principal_image != null) {
                    $file_old1 = $path . $principalWelcome->principal_image;
                    unlink($file_old1);
                }
            }
            $principal_image = time() .'.'. $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $principal_image);
            $request->principal_image->move(public_path('images/'), $principal_image);
            $request->principal_image = $principal_image;
        }
        if ($file1 != '') {
            $path = public_path() . '/images/';

            if (file_exists($path . $principalWelcome->img1)) {
                if ($principalWelcome->img1 != '' && $principalWelcome->img1 != null) {
                    $file_old2 = $path . $principalWelcome->img1;
                    unlink($file_old2);
                }
            }
            $img1 = time() .'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $img1);
            $request->img1->move(public_path('images/'), $img1);
            $request->img1 = $img1;
        }

        $principalWelcome->update($request->all());

        $index = PrincipalDaySchool::orderBy('id', 'DESC')->first();
        if ($file != ''){
            $index->principal_image = $principal_image;
            $index->save();
        }
        if ($file1 != ''){
            $index->img1 = $img1;
            $index->save();
        }

        return redirect()->route('admin.principal-day.index');
    }

}
