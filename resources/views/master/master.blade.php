<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','My Website')</title>
    <!-- {{-- css chung --}} -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>


<body>
    <!-- {{-- Gọi code trang header --}} -->
    @include('master.header')
    <!-- {{-- Nơi chứa nội dung thay đổi --}} -->
    @section('content')

    @show
    <!-- {{-- gọi code trang footer --}} -->
    @include('master.footer')
    <!-- {{-- javascript dùng chung --}} -->
</body>

</html>