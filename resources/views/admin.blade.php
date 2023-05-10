@extends('master.master')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">{{_('Dashboard') }}</div>
         </div>
         <div class="card-body">
            @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status')}}
               </div>
            @endif
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container-fluid">
                  <a class="navbar-brand" href="#">Admin</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('admin')}}">Home</a>
                     </li>
                     
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Quản lý danh mục 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="{{route('categories.create')}}">Thêm danh mục </a></li>
                           <li><a class="dropdown-item" href="{{route('categories.index')}}">Liệt kê danh mục </a></li>
                           
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Quản lý bài viết 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="{{route('posts.create')}}">Thêm bài viết </a></li>
                           <li><a class="dropdown-item" href="{{route('posts.index')}}">Liệt kê bài viết </a></li>
                           
                        </ul>
                     </li>
                     
                     </ul>
                     <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                     </form>
                  </div>
               </div>
            </nav>
         </div>
      </div>
   </div>
</div>
@endsection
