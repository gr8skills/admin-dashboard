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

    public function update(UpdateIndexPageRequest $request, $CMSIndex)
    {

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $CMSIndex = CMSIndex::find($CMSIndex);

        $row1_picture = $request->file('row1_picture');
        $row2_picture1 = $request->file('row2_pic1');
        $row2_picture2 = $request->file('row2_pic2');
        $row2_picture3 = $request->file('row2_pic3');
        $row2_picture4 = $request->file('row2_pic4');

        if ($row1_picture != ''){
            $path = public_path() . '/images';

            if ($CMSIndex->row1_picture != '' && $CMSIndex->row1_picture != null){
                $file_old1 = $path.$CMSIndex->row1_picture;
                unlink($file_old1);
            }
            $pic1 = time().'.'. $row1_picture->getClientOriginalName();
            $path = $row1_picture->storeAs('public/images', $pic1);
            $request->row1_picture->move(public_path('images'), $pic1);
            $request->row1_picture = $path;
        }

        if ($row2_picture1 != ''){
            $path = public_path() . '/images';


            $pic2 = time().'.'. $row2_picture1->getClientOriginalName();
            $path2 = $row2_picture1->storeAs('public/images', $pic2);
            $request->row2_pic1->move(public_path('images'), $pic2);
            $request->row2_pic1 = $path2;
        }

        if ($row2_picture2 != ''){
            $path = public_path() . '/images';


            $pic3 = time().'.'. $row2_picture2->getClientOriginalName();
            $path3 = $row2_picture2->storeAs('public/images', $pic3);
            $request->row2_pic2->move(public_path('images'), $pic3);
            $request->row2_pic2 = $path3;
        }

        if ($row2_picture3 != ''){
            $path = public_path() . '/images';


            $pic4 = time().'.'. $row2_picture3->getClientOriginalName();
            $path4 = $row2_picture3->storeAs('public/images', $pic4);
            $request->row2_pic3->move(public_path('images'), $pic4);
            $request->row2_pic3 = $path4;
        }

        if ($row2_picture4 != ''){
            $path = public_path() . '/images';


            $pic5 = time().'.'. $row2_picture4->getClientOriginalName();
            $path5 = $row2_picture4->storeAs('public/images', $pic5);
            $request->row2_pic4->move(public_path('images'), $pic5);
            $request->row2_pic4 = $path5;
        }


        $index = CMSIndex::orderBy('id', 'DESC')->first();

        $index->update($request->all());


        if ($row1_picture != ''){
            $index->row1_picture = $pic1;
            $index->save();
        }
        if ($row2_picture1 != ''){
            $index->row2_pic1 = $pic2;
            $index->save();
        }
        if ($row2_picture2 != ''){
            $index->row2_pic2 = $pic3;
            $index->save();
        }
        if ($row2_picture3 != ''){
            $index->row2_pic3 = $pic4;
            $index->save();
        }
        if ($row2_picture4 != ''){
            $index->row2_pic4 = $pic5;
            $index->save();
        }

        return redirect()->route('admin.index-cms.index');

    }
}
