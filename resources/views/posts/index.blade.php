@extends('master.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt kê bài viết</div>
                <div class="card-body">
                    @if(session('status'))
                    <div class="alert-success" role="alert">
                        {{ session('status')}}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                

                                <th scope="col">Tên bài viết</th>
                                <th scope="col">slide_url </th>
                                <th scope="col">content </th>
                                <th scope="col">creatd_at </th>
                                <th scope="col">updated_at </th>
                                <th scope="col">category_id </th>
                                <th scope="col">Kích hoạt </th>
                                <th scope="col">Quản lí</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach($pots as $key => $pot)
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <td>{{$pot->slide_url}}</td>
                                <td>{{$pot->content}}</td>
                                <td>{{$pot->content}}</td>
                                <td>{{$pot->created_at}}</td>
                                <td>{{$pot->updated_at}}</td>
                                <td>{{$pot->category_id}}</td>
                                <td>
                                    @if($pot->is_active==0)
                                    <span class="text text-danger">Không kích hoạt</span>
                                    @else
                                    <span class="text text-success">Kích hoạt</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('posts.edit',[$pot->id])}}" class="btn btn-primary">Sửa</a>
                                    <form action="{{route('posts.destroy',[$pot->id])}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button onclick="return confirm('Bạn muốn xóa bài viết này?');" class="btn btn-danger">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection