<?php

namespace App\Http\Controllers\Admin\Content;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content\PostCategory;
use App\Http\Requests\Admin\Content\PostCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postCategories = PostCategory::all();
        return view('admin.content.category.index', compact('postCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCategoryRequest $request)
    {
        $inputs = $request->all();
        $inputs['slug'] = str_replace(' ', '-', $inputs['name']) . '-' . Str::random(5);
        $inputs['image'] = 'image';
        $postCategory = PostCategory::create($inputs);
        return redirect()->route('admin.content.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCategory $postCategory)
    {
        return view('admin.content.category.edit', compact('postCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostCategoryRequest $request, PostCategory $postCategory)
    {
        $inputs = $request->all();
        $inputs['image'] = 'image';
        $postCategory->update($inputs);
        return redirect()->route('admin.content.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostCategory $postCategory)
    {
        $result = $postCategory->delete();
        return redirect()->route('admin.content.category.index');
    }
}
