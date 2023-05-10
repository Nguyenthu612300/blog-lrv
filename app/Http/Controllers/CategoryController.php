<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = Category::orderBy('id','DESC')->get();
        return view('categories.index')->with(compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->validate(
            [
                'title' =>'required|unique:categories|max:225',
                'is_active'=>'required',
            ],
            [
                'title.required'=>'Nhập tiêu đề',
                'title.unique'=>'Tiêu đề này đã tồn tại, nhập tiêu đề khác!'
            ]
        );
        $cate = new Category;
        $cate ->title = $data['title'];
        $cate ->is_active = $data['is_active'];
        $cate ->save();
        //return redirect();
        return redirect()-> route('categories.index')->with('status', 'Thêm danh mục thành công!');
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
    public function edit($id)
    {
        $cate = Category::find($id);
        return view('categories.edit')->with(compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =$request->validate(
            [
                'title' =>'required|unique:categories|max:225',
                'is_active'=>'required',
            ],
            [
                'title.required'=>'Nhập tiêu đề',
                'title.unique'=>'Tiêu đề này đã tồn tại, nhập tiêu đề khác!'
            ]
        );
        $cate = Category::find($id);
        $cate ->title = $data['title'];
        $cate ->is_active = $data['is_active'];
        $cate ->save();
        return redirect()-> route('categories.index')->with('status', 'Cập nhật danh mục thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('categories.index')->with('status', 'Xoá danh mục thành công!');
    }
}
