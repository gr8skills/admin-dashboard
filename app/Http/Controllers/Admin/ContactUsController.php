<?php

namespace App\Http\Controllers\Admin;

use App\ContactUs;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateContactUsRequest;
use App\StudentLife;
Use Gate;
use Symfony\Component\HttpFoundation\Response;

class ContactUsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $contact = ContactUs::orderBy('id', 'DESC')
            ->first();
        return view('admin.contactus.edit', compact('contact'));
    }

    public function update(UpdateContactUsRequest $request, $contact)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $contact = ContactUs::find($contact);


        $file4 = $request->file('main_img');


        if ($file4 != ''){
            $path = public_path() . '/images/';

            if (file_exists($path.$contact->main_img)){
                if ($contact->main_img != '' && $contact->main_img != null){
                    $file_old4 = $path.$contact->main_img;
                    unlink($file_old4);
                }
            }

            $main_img = time().'.'. $file4->getClientOriginalName();
            $path = $file4->storeAs('public/images', $main_img);
            $request->main_img->move(public_path('images'), $main_img);
            $request->main_img = $main_img;
        }


        $contact->update($request->all());

        $index = ContactUs::orderBy('id', 'DESC')->first();

        if ($file4 != '') {
            $index->main_img = $main_img;
            $index->save();
        }

        return redirect()->route('admin.contactus.index');
    }
}
