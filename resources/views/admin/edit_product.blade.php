<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
</head>


<body>
    <div class="container-scroller">
        <!-- slibar -->
        @include('admin.slidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper ">
                    @if (@session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="row d-flex flex-md-column">
                        <h1 class="font-h1">Thêm Sản phẩm</h1>
                        <form action="{{ url('/save_edit' ,$data->id)}}" method="POST" class="form_create_product">
                            @csrf
                            @method('POST')
                            <div class="text-left d-flex flex-md-column">
                                <label class="ml-2">Tên sản phẩm</label>
                                <input type="text" class="text-dark rounded"
                                    name="title"placeholder="Nhập tên sản phẩm" id="" value="{{$data->title}}">
                                <label class="ml-2 mt-4">Mô tả</label>
                                <textarea name="description" class="text-dark rounded" cols="20" rows="5"placeholder="Mô tả">{{$data->description}}</textarea>
                                <label class="ml-2">Hình ảnh</label>
                                <input type="file" class="text-dark rounded"
                                    name="image"placeholder="Nhập tên sản phẩm" id=""value="{{$data->image}}">
                                <label class="ml-2">Danh mục</label>
                                <input type="text" class="text-dark rounded"
                                    name="category"placeholder="Nhập tên sản phẩm" id=""value="{{$data->category}}">
                                <label class="ml-2">Số lượng</label>
                                <input type="text" class="text-dark rounded"
                                    name="quality"placeholder="Nhập tên sản phẩm" id=""value="{{$data->quality}}">
                                <label class="ml-2">Giá bán</label>
                                <input type="text" class="text-dark rounded"
                                    name="price"placeholder="Nhập tên sản phẩm" id=""value="{{$data->price}}">
                                <label class="ml-2">Giá khi đã giảm</label>
                                <input type="text" class="text-dark rounded"
                                    name="discount_price"placeholder="Nhập tên sản phẩm" id=""value="{{$data->discount_price}}">
        
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="btn btn-success p-2 text-center">Sửa</button>
                            </div>
                        </form>
                    </div>
                  

                </div>
                @include('admin.footer')
            </div>
            <!-- content-wrapper ends -->

            <!-- partial:partials/_footer.html -->
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
