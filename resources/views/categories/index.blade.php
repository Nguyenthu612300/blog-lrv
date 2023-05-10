@extends('master.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt kê danh mục</div>
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
                                

                                <th scope="col">Tên danh mục</th>

                                <th scope="col">Kích hoạt </th>
                                <th scope="col">Quản lí</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach($cates as $key => $cate)
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <td>{{$cate->title}}</td>

                                <td>
                                    @if($cate->is_active==0)
                                    <span class="text text-danger">Không kích hoạt</span>
                                    @else
                                    <span class="text text-success">Kích hoạt</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('categories.edit',[$cate->id])}}" class="btn btn-primary">Sửa</a>
                                    <form action="{{route('categories.destroy',[$cate->id])}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button onclick="return confirm('Bạn muốn xóa danh mục này?');" class="btn btn-danger">Xóa</button>
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