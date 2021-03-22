<?php

namespace App\Http\Controllers\Admin;

use App\CMSIndex;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateIndexPageRequest;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class CMSIndexController extends Controller
{
    //
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $indexPage = CMSIndex::orderBy('id', 'DESC')
            ->first();

        return view('admin.indexCMS.edit', compact('indexPage'));
    }

    public function update(UpdateIndexPageRequest $request, CMSIndex $CMSIndex)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $row1_picture = $request->file('row1_picture');
        $row2_picture1 = $request->file('row2_pic1');
        $row2_picture2 = $request->file('row2_pic2');
        $row2_picture3 = $request->file('row2_pic3');
        $row2_picture4 = $request->file('row2_pic4');

        if (!is_null($row1_picture))
            $row1_picture =  time().'.'.$row1_picture->getClientOriginalName();
        if (!is_null($row2_picture1))
            $row2_picture1 =  time().'.'.$row2_picture1->getClientOriginalName();
        if (!is_null($row2_picture2))
            $row2_picture2 =  time().'.'.$row2_picture2->getClientOriginalName();
        if (!is_null($row2_picture3))
            $row2_picture3 =  time().'.'.$row2_picture3->getClientOriginalName();
        if (!is_null($row2_picture4))
            $row2_picture4 =  time().'.'.$row2_picture4->getClientOriginalName();


        if (!is_null($row1_picture))
            $path_r1p1 = $row1_picture->storeAs('public/images', $row1_picture);

        if (!is_null($row2_picture1))
            $path_r2p1 = $row2_picture1->storeAs('public/images', $row2_picture1);

        if (!is_null($row2_picture2))
            $path_r2p2 = $row2_picture2->storeAs('public/images', $row2_picture2);

        if (!is_null($row2_picture3))
            $path_r2p3 = $row2_picture3->storeAs('public/images', $row2_picture3);

        if (!is_null($row2_picture4))
            $path_r2p4 = $row2_picture4->storeAs('public/images', $row2_picture4);


        $request->row1_picture->move(public_path('images'), $row1_picture);
        $request->row2_pic1->move(public_path('images'), $row2_picture1);
        $request->row2_pic2->move(public_path('images'), $row2_picture2);
        $request->row2_pic3->move(public_path('images'), $row2_picture3);
        $request->row2_pic4->move(public_path('images'), $row2_picture4);


        $request->row1_picture = $path_r1p1;
        $request->row2_pic1 = $path_r2p1;
        $request->row2_pic2 = $path_r2p2;
        $request->row2_pic3 = $path_r2p3;
        $request->row2_pic4 = $path_r2p4;


        $index = CMSIndex::update($request->all());
        $index->row1_picture = $row1_picture;
        $index->row2_pic1 = $row2_picture1;
        $index->row2_pic2 = $row2_picture2;
        $index->row2_pic3 = $row2_picture3;
        $index->row2_pic4 = $row2_picture4;
        $index->save();
        return redirect()->route('admin.indexCMS.index');

//        $CMSIndex->update($request->all());
//
//        return redirect()->route('admin.indexCMS.edit');
    }
}
