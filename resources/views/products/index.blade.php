@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">

        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Product</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic Table starts -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Danh sách sản phẩm</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table id="myTable" class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Sku</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->sku }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>
                                                    <a href="javascripts;;" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                                        <i
                                                            class="fa fa-plus-circle"></i>
                                                    </a>
                                                    <a class="btn btn-xs"
                                                       href="{{ route('products.edit', $item->id) }}"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-xs destroy"
                                                       href="{{ route('productsDelete', $item->id)}}"><i
                                                            class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Basic Table ends -->
                    <!-- Background Utilities table ends -->
                </div>
            </div>
        </div>
        <!-- Main content ends -->
        <!-- Container-fluid ends -->

    </div>
    <!-- Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    @include('layouts.errors.errors')
                    <form action="{{route('productsCreate')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="sku">Sku</label>
                            <input type="text" class="form-control" id="sku" name="sku">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>
                        <button type="submit" class="btn btn-success" name="btn_add">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection
@section('script')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.destroy').click(function (e) {
            e.preventDefault();
            url = $(this).attr('href');

            $.ajax({
                type: 'POST',
                url: url,
                dataType: 'json',
                success: function (r) {
                    if (r.status === 404) {
                        alert(r.message);
                    } else if (r.status === 200) {
                        alert(r.message);
                        window.location.reload();
                    }
                }
            })
        });

        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>
@endsection
