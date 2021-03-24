<?php


namespace App\Http\Controllers\Admin;

use App\CMSAboutUsHistory;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutUsHistoryRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class CMSAboutUsHistoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $history = CMSAboutUsHistory::orderBy('id', 'DESC')
            ->first();

        return view('admin.historyEdit.edit', compact('history'));
    }

    public function update(UpdateAboutUsHistoryRequest $request, CMSAboutUsHistory $CMSAboutUsHistory)
    {
        abort_if(Gate::denies('content_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $history = CMSAboutUsHistory::update($request->all());
        return redirect()->route('admin.about-us-history.index');
    }
}
