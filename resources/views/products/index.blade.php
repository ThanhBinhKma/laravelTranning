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
                                                    <a class="btn btn-xs" href="{{ route('products.show', $item->id) }}"
                                                       data-toggle="modal" data-target=".bs-example-modal-lg"><i
                                                            class="fa fa-plus-circle"></i></a>
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
@endsection
@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection
@section('script')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="cuccutto/assets/js/ajax.js"></script>
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
