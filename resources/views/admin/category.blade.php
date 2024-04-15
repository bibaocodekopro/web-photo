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

    .form_create_category {
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
                    <div class="row d-flex flex-md-column">
                        <h1 class="font-h1">Thêm danh mục</h1>
                        <form action="{{ url('/add_category') }}" method="POST" class="form_create_category">
                            @csrf
                            <div class="text-left d-flex flex-md-column">
                                <label class="ml-2">Tên danh mục</label>
                                <input type="text" class="text-dark rounded"
                                    name="name_category"placeholder="Nhập tên danh mục" id="">
                                <label class="ml-2 mt-4">Mô tả</label>
                                <textarea name="description_category" class="text-dark rounded" cols="20" rows="5"placeholder="Mô tả"></textarea>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="btn btn-success p-2 text-center">Tạo</button>
                            </div>
                        </form>
                    </div>
                    <div class="row m-5 d-flex flex-md-column">
                        <h1 class="font-h1">Danh sách danh mục</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="w-5" scope="col">#</th>
                                    <th class="w-20" scope="col">Tên</th>
                                    <th class="w-50" scope="col">Mô tả</th>
                                    <th class="w-25" scope="col">Lựa chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr >
                                        <th class="w-5"  scope="row">{{ $data->id }}</th>
                                        <td class="w-20">{{ $data->category_name }}</td>
                                        <td class="w-50"><p>{{ $data->description }}</p></td>
                                        <td class="w-25"><a class="text-decoration-none btn btn-outline-danger mx-1"
                                                onclick="return confirm('Are you sure to delete this category?')"
                                                href="{{ url('/delete_category', $data->id) }}">Xóa</a>
                                                <a class="text-decoration-none btn btn-outline-warning mx-1"
                                                onclick="">Sửa</a>
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
