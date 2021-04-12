<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMainMenuRequest;
use App\Http\Requests\StoreMainMenuRequest;
use App\Http\Requests\UpdateMainMenuRequest;
use App\MainMenu;
use Gate;
use Illuminate\Http\Request;
use \Symfony\Component\HttpFoundation\Response;

class MainMenuController extends Controller
{
    //start

    public function index()
    {
        abort_if(Gate::denies('mainMenu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menus = MainMenu::all();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $menu = MainMenu::orderBy('id', 'asc')->first();
        abort_if(Gate::denies('mainMenu_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.menus.create', compact('menu'));

    }

    public function store(StoreMainMenuRequest $request)
    {
        $menu = MainMenu::create($request->all());
        return redirect()->route('admin.main-menu.index');
    }

    public function edit(MainMenu $mainMenu)
    {
        $menu = $mainMenu;
        abort_if(Gate::denies('mainMenu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.menus.edit', compact('menu'));
    }

    public function update(UpdateMainMenuRequest $request, $mainMenu)
    {
        $mainMenu = MainMenu::find($mainMenu);
        $mainMenu->update($request->all());
        return redirect()->route('admin.main-menu.index');
    }

    public function show(MainMenu $mainMenu)
    {
        $menu = $mainMenu;
        abort_if(Gate::denies('mainMenu_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.menus.show', compact('menu'));
    }

    public function destroy(MainMenu $mainMenu)
    {
        abort_if(Gate::denies('mainMenu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mainMenu->delete();

        return back();
    }

    public function massDestroy(MassDestroyMainMenuRequest $request)
    {
        MainMenu::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }

}
