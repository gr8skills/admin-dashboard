<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateLearningRequest;
use App\Learning;
Use Gate;
use Symfony\Component\HttpFoundation\Response;

class LearningController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $learning = Learning::orderBy('id', 'DESC')
            ->first();
        return view('admin.learning.edit', compact('learning'));
    }

    public function update(UpdateLearningRequest $request, Learning $learning)
    {
        dd($learning->pic1);

        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file = $request->file('pic');
        $file1 = $request->file('pic1');
        $file2 = $request->file('pic2');
        $file3 = $request->file('pic3');
        $file4 = $request->file('pic4');
        $file5 = $request->file('pic5');
        $file6 = $request->file('pic6');

        if ($file != ''){
            $path = public_path() . '/images/';

            if ($path.$learning->pic){
                if ($learning->pic != '' && $learning->pic != null){
                    $file_old = $path.$learning->pic;
                    unlink($file_old);
                }
            }

            $pic = time().'.'. $file->getClientOriginalName();
            $path = $file->storeAs('public/images', $pic);
            $request->pic->move(public_path('images'), $pic);
            $request->pic = $pic;
        }
        if ($file1 != ''){
            $path = public_path() . '/images/';

            if ($path.$learning->pic1){
                if ($learning->pic1 != '' && $learning->pic1 != null){
                    $file_old1 = $path.$learning->pic1;
                    unlink($file_old1);
                }
            }

            $pic1 = time().'.'. $file1->getClientOriginalName();
            $path = $file1->storeAs('public/images', $pic1);
            $request->pic1->move(public_path('images'), $pic1);
            $request->pic1 = $pic1;
        }
        if ($file2 != ''){
            $path = public_path() . '/images/';

            if ($path.$learning->pic2){
                if ($learning->pic2 != '' && $learning->pic2 != null){
                    $file_old2 = $path.$learning->pic2;
                    unlink($file_old2);
                }
            }

            $pic2 = time().'.'. $file2->getClientOriginalName();
            $path = $file2->storeAs('public/images', $pic2);
            $request->pic2->move(public_path('images'), $pic2);
            $request->pic2 = $pic2;
        }
        if ($file3 != ''){
            $path = public_path() . '/images/';

            if ($path.$learning->pic3){
                if ($learning->pic3 != '' && $learning->pic3 != null){
                    $file_old3 = $path.$learning->pic3;
                    unlink($file_old3);
                }
            }

            $pic3 = time().'.'. $file3->getClientOriginalName();
            $path = $file3->storeAs('public/images', $pic3);
            $request->pic3->move(public_path('images'), $pic3);
            $request->pic3 = $pic3;
        }
        if ($file4 != ''){
            $path = public_path() . '/images/';

            if ($path.$learning->pic4){
                if ($learning->pic4 != '' && $learning->pic4 != null){
                    $file_old4 = $path.$learning->pic4;
                    unlink($file_old4);
                }
            }

            $pic4 = time().'.'. $file4->getClientOriginalName();
            $path = $file4->storeAs('public/images', $pic4);
            $request->pic4->move(public_path('images'), $pic4);
            $request->pic4 = $pic4;
        }
        if ($file5 != ''){
            $path = public_path() . '/images/';

            if ($path.$learning->pic5){
                if ($learning->pic5 != '' && $learning->pic5 != null){
                    $file_old5 = $path.$learning->pic5;
                    unlink($file_old5);
                }
            }

            $pic5 = time().'.'. $file5->getClientOriginalName();
            $path = $file5->storeAs('public/images', $pic5);
            $request->pic5->move(public_path('images'), $pic5);
            $request->pic5 = $pic5;
        }
        if ($file6 != ''){
            $path = public_path() . '/images/';

            if ($path.$learning->pic6){
                if ($learning->pic6 != '' && $learning->pic6 != null){
                    $file_old6 = $path.$learning->pic6;
                    unlink($file_old6);
                }
            }

            $pic6 = time().'.'. $file6->getClientOriginalName();
            $path = $file6->storeAs('public/images', $pic6);
            $request->pic6->move(public_path('images'), $pic6);
            $request->pic6 = $pic6;
        }

        $learning->update($request->all());

        $index = Learning::orderBy('id', 'DESC')->first();
        if ($file1 != ''){
            $index->pic1 = $pic1;
            $index->save();
        }
        if ($file2 != ''){
            $index->pic2 = $pic2;
            $index->save();
        }
        if ($file3 != ''){
            $index->pic3 = $pic3;
            $index->save();
        }
        if ($file4 != ''){
            $index->pic4 = $pic4;
            $index->save();
        }
        if ($file5!= ''){
            $index->pic5 = $pic5;
            $index->save();
        }
        if ($file6!= ''){
            $index->pic6 = $pic6;
            $index->save();
        }


        return redirect()->route('admin.learning.index');
    }

}
