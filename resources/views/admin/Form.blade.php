<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tạo Mới Sản Phẩm</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card p-2 mt-3">
                <form action="/admin/bakery/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>
                            Tên Sản Phẩm
                        </label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>
                            Danh Mục Sản Phẩm
                        </label>
                        <select class="form-control" name="categoryId" id="">
                            @foreach($categories as $item)
                                <option value="{{$item -> id}}">
                                    {{$item -> name}}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>
                            Giá
                        </label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label>
                            Ảnh Sản Phẩm
                        </label><br>
                        <input type="file" name="images">
                    </div>
                    <div class="form-group">
                        <label>
                            Giới Thiệu SP
                        </label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label>
                            Chi Tiết SP
                        </label>
                        <textarea name="content" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            Ghi Chú
                        </label>
                        <input class="form-control" type="text" name="note">
                    </div>
                    <div class="form-group pl-5">
                        <button type="submit" class="btn btn-outline-primary mr-5 ml-5">Tạo Mới</button>
                        <button type="reset" class="btn btn-outline-danger">Làm Lại</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>