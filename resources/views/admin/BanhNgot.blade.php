@extends('admin.layouts.master', ['currentPage' => 'bakery-list'])
@section('page-title', 'List Bakery - Admin Page')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title float-left">
                Danh Sách Sản Phẩm
            </h3>
            <a href="/admin/bakery/create" class="btn float-right"><i
                        class="fas fa-plus-circle"></i> Thêm Mới Sản Phẩm</a>
            <div class="clearfix"></div>
            <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
            <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
            @if(count($bakeries_inView)>0)
                <div class="row m-1">
                    <form action="/admin/bakery/list" method="GET" class="form-inline" name="category-form">
                        <div class="form-group">
                            <label>Danh Mục Sản Phẩm: </label>
                            <select name="categoryId" class="form-control m-3">
                                <option value="0">Tất Cả</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr class="row">
                        <th class="col-md-1"></th>
                        <th class="col-md-1">Mã SP</th>
                        <th class="col-md-2">Ảnh</th>
                        <th class="col-md-2">Tên Sản Phẩm</th>
                        <th class="col-md-2">Thông Tin</th>
                        <th class="col-md-1">Giá</th>
                        <th class="col-md-3">Chức Năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bakeries_inView as $item)
                        <tr class="row" id="row-item-{{$item->id}}">
                            <td class="col-md-1 text-center">
                                <input type="checkbox" class="check-item">
                            </td>
                            <td class="col-md-1">{{$item->id}}</td>
                            <td class="col-md-2">
                                <div class="card"
                                     style="background-image: url('{{$item->images}}'); background-size: cover; width: 60px; height: 60px;">
                                </div>
                            </td>
                            <td class="col-md-2">{{$item->name}}</td>
                            <td class="col-md-2">{{$item->description}}</td>
                            <td class="col-md-1">{{$item->price}}</td>
                            <td class="col-md-3">
                                {{--<a href="#" class="btn btn-link btn-quick-edit">Sửa Nhanh</a>&nbsp;&nbsp;--}}
                                <a href="javascript:void(0)" class="btn btn-link btn-edit" id="rowItem-{{$item->id}}">Sửa</a>&nbsp;&nbsp;
                                <a href="#" id="{{$item-> id}}"
                                   class="btn btn-link btn-delete">Xóa
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-8 form-inline">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="check-all">
                            <label class="form-check-label" for="defaultCheck1">
                                Chọn Tất Cả
                            </label>
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <select id="select-action" class="form-control">
                                <option selected value="0">--Lựa Chọn--</option>
                                <option value="1">Xóa Tất Cả</option>
                                <option value="2">Khác</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2"
                                id="btn-apply">Thực Hiện
                        </button>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right">
                            {{ $bakeries_inView -> links() }}
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-info" role="alert">
                    Hiện tại không có sản phẩm nào!!
                </div>
            @endif
        </div>

        {{--Modal Sửa sản phẩm--}}
        <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sửa Sản Phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post" enctype="multipart/form-data" id="formEdit">
                            @csrf
                            <div class="form-group">
                                <label>
                                    Tên Sản Phẩm
                                </label>
                                <input type="text" class="form-control" name="nameEdit">
                            </div>
                            <div class="form-group">
                                <label>
                                    Danh Mục Sản Phẩm
                                </label>
                                <select class="form-control" name="categoryIdEdit" id="categoryIdEdit">
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
                                <input type="text" class="form-control" name="priceEdit">
                            </div>
                            <div class="form-group">
                                <label>
                                    Ảnh Sản Phẩm
                                </label><br>
                                <input type="file" name="imagesEdit">
                                <img src="#" alt="IMG-PRODUCT" id="imgEdit" style="height: 100px;width: 100px">
                            </div>
                            <div class="form-group">
                                <label>
                                    Giới Thiệu SP
                                </label>
                                <input type="text" class="form-control" name="descriptionEdit">
                            </div>
                            <div class="form-group">
                                <label>
                                    Chi Tiết SP
                                </label>
                                <textarea name="contentEdit" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>
                                    Ghi Chú
                                </label>
                                <input class="form-control" type="text" name="noteEdit">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-outline-primary" id="saveEdit">Lưu Thay Đổi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <form action="" id="formDestroy" method="POST">
            @csrf

            @method('DELETE')
        </form>

        <!--Modal xóa sản phẩm.-->
        <div class="modal fade" id="modalDelete" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Bạn có chắc muốn xóa?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
                        <button type="button" class="btn btn-primary" id="accept">Đồng ý</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


