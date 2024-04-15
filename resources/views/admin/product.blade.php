<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
</head>
<style>
    .font-h1 {
        font-size: 35px;
        text-align: center;
        margin-bottom: 15px;
    }

    .form_create_product {
        width: 40%;
        text-align: center;
        margin: 5px auto
    }
</style>

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
                    <div class="row m-5 d-flex flex-md-column">
                        <h1 class="font-h1">Danh sách Sản phẩm</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th  scope="col">#</th>
                                    <th  scope="col">Tên</th>
                                    <th  scope="col">Mô tả</th>
                                    <th  scope="col">Hình ản</th>
                                    <th  scope="col">Danh mục</th>
                                    <th  scope="col">Số lượng</th>
                                    <th  scope="col">Giá bán</th>
                                    <th  scope="col">Giá đã giảm</th>
                                    <th  scope="col">Lựa chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>
                                        <th scope="row">{{ $data->id }}</th>
                                        <td >{{ $data->title }}</td>
                                        <td >{{ $data->description }}</td>
                                        <td >{{ $data->image }}</td>
                                        <td >{{ $data->category }}</td>
                                        <td >{{ $data->quality }}</td>
                                        <td >{{ $data->price }}</td>
                                        <td >{{ $data->discount_price }}</td>

                                        <td class="w-25"><a class="text-decoration-none btn btn-outline-danger mx-1"
                                                onclick="return confirm('Are you sure to delete this product?')"
                                                href="{{ url('/delete_product', $data->id) }}">Delete</a>
                                            <a class="text-decoration-none btn btn-outline-warning mx-1
                                            "href="{{ url('/edit_product', $data->id) }}">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
