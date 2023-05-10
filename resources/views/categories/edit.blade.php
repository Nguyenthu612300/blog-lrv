
@extends('master.master')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật danh mục</div>
                <!-- validate dữ liệu nhập vào -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- kết thúc validate dữ liệu -->
                </div>
                <div class="card-body">
                    @if (session('status'))
                     <div class="alert alert-success" role="alert">
                           {{ session('status')}}
                     </div>
                    @endif
                </div>

                <form method="POST" action="{{ route('categories.update',[$pot->id]) }}" >
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                            <input type="text" name="title" value="{{$pot->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                            <select class="formselect" name="is_active" aria-label="Default select example">
                              @if($cate->is_active==0)
                                <option value="1" selected>Kích hoạt</option>
                                <option selected value="0">Không kích hoạt</option>
                              @else
                                <option selected value="1" selected>Kích hoạt</option>
                                <option value="0">Không kích hoạt</option>
                              @endif
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection