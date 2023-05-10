<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pots = Post::orderBy('id', 'DESC')->get();
        return view('posts.index')->with(compact('pots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'required|unique:posts|max:225',
                'is_active' => 'required',
                'slide_url' => 'required',
                'content' => 'required',
                'category_id' => 'required'
            ],
            [
                'title.required' => 'Nhập tiêu đề',
                'title.unique' => 'Tiêu đề này đã tồn tại, nhập tiêu đề khác!',
                'is_active.required' => 'Kích hoạt',
                'slide_url.required' => 'Nhập slide_url',
                'content.required' => 'Nhập nội dung',
                'category_id.required' => 'Nhập category_id'
            ]
        );
        $pot = new Post();
        $pot->title = $data['title'];
        $pot->is_active = $data['is_active'];
        $pot->slide_url = $data['slide_url'];
        $pot->content = $data['content'];
        $pot->category_id= $data['category_id'];
        $pot->save();
        return redirect()->route('posts.index')->with('status', 'Cập nhật bài viết thành công!');
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
        $pot = Post::find($id);
        return view('posts.edit', compact('pot'));
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
        $data = $request->validate(
            [
                'title' => 'required|unique:posts|max:225',
                'is_active' => 'required',
                'slide_url' => 'required',
                'content' => 'required',
                'category_id' => 'required'
            ],
            [
                'title.required' => 'Nhập tiêu đề',
                'title.unique' => 'Tiêu đề này đã tồn tại, nhập tiêu đề khác!',
                'is_active.required' => 'Kích hoạt',
                'slide_url.required' => 'Nhập slide_url',
                'content.required' => 'Nhập nội dung',
                'category_id.required' => 'Nhập category_id'
            ]
        );
        $pot = Post::find($id);
        $pot->title = $data['title'];
        $pot->is_active = $data['is_active'];
        $pot->slide_url = $data['slide_url'];
        $pot->content = $data['content'];
        $pot->category_id= $data['category_id'];

        $pot->save();
        return redirect()->route('posts.index')->with('status', 'Cập nhật bài viết thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts.index')->with('status', 'xóa bài viết thành công!');
    }
}