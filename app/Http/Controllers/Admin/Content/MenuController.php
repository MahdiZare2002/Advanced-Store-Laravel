<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Content\MenuRequest;
use App\Models\Content\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderBy('created_at', 'desc')->simplePaginate(15);
        return view('admin.content.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::where('parent_id', null)->get();
        return view('admin.content.menu.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $inputs = $request->all();
        $menu = Menu::create($inputs);
        return redirect()->route('admin.content.menu.index')->with('swal-success', 'منوی شما با موفقیت تشکیل شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $parent_menus = Menu::where('parent_id', null)->get();
        return view('admin.content.menu.edit', compact('menu', 'parent_menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, Menu $menu)
    {
        $inputs = $request->all();
        $menu->update($inputs);
        return redirect()->route('admin.content.menu.index')->with('swal-success' , 'منوی شما با موفقیت آپدیت شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }

    public function status(Menu $menu)
    {

        $menu->status = $menu->status == 0 ? 1 : 0;
        $result = $menu->save();
        if ($result) {
            if ($menu->status == 0) {
                return response()->json(['status' => true, 'checked' => false]);
            } else {
                return response()->json(['status' => true, 'checked' => true]);
            }
        } else {
            return response()->json(['status' => false]);
        }
    }
}
