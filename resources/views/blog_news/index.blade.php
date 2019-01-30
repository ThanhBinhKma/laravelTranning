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
                            <h5 class="card-header-text">Danh sách bài viết</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table id="myTable" class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Author</th>
                                            <th>Like</th>
                                            <th>view</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datas as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->Title }}</td>
                                                <td>{{ $item->Content }}</td>
                                                <td>{{ $item->Author }}</td>
                                                <td>{{ $item->Like }}</td>
                                                <td>{{ $item->View }}</td>
                                                <td>
                                                    <a class="btn btn-xs" href="{{ route('blog_news.show', $item->id) }}"><i class="fa fa-apple"></i></a>
                                                    <a class="btn btn-xs" href="{{ route('blog_news.edit', $item->id) }}"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-xs" href="{{ route('blog_news.destroy', $item->id) }}"><i class="fa fa-times"></i></a>
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
