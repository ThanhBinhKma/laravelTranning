@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">

        <!-- Container-fluid starts -->
        <!-- Main content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row m-b-30 dashboard-header">
                <div class="col-lg-3 col-sm-6">
                    <div class="dashboard-primary bg-primary">
                        <div class="sales-primary">
                            <i class="icon-bubbles"></i>
                            <div class="f-right">
                                <h2 class="counter">4500</h2>
                                <span>Total Sales</span>
                            </div>
                        </div>
                        <div class="bg-dark-primary">
                            <p class="week-sales">Total SALES</p>
                            <p class="total-sales">432</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-success dashboard-success">
                        <div class="sales-success">
                            <i class="icon-speedometer"></i>
                            <div class="f-right">
                                <h2 class="counter">3521</h2>
                                <span>Last Week's Sale</span>
                            </div>
                        </div>
                        <div class="bg-dark-success">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales ">432</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="bg-warning dasboard-warning">
                        <div class="sales-warning">
                            <i class="icon-basket-loaded"></i>
                            <div class="f-right">
                                <h2 class="counter">1085</h2>
                                <span>New Orders</span>
                            </div>
                        </div>
                        <div class="bg-dark-warning">
                            <p class="week-sales">LAST WEEK'S SALES</p>
                            <p class="total-sales">84</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products counter">4500</h2>
                        <span class="label label-warning">Orders</span>New Orders
                        <div class="side-box bg-warning">
                            <i class="icon-social-soundcloud"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products counter">37,500</h2>
                        <span class="label label-primary">Sales</span>Last Week Sales
                        <div class="side-box bg-primary">
                            <i class="icon-social-soundcloud"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products">$<span class="counter">30,780</span></h2>
                        <span class="label label-success">Sales</span>Total Sales
                        <div class="side-box bg-success">
                            <i class="icon-bubbles"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="col-sm-12 card dashboard-product">
                        <span>Products</span>
                        <h2 class="dashboard-total-products">$<span class="counter">30,780</span></h2>
                        <span class="label label-danger">Views</span>Views Today
                        <div class="side-box bg-danger">
                            <i class="icon-bubbles"></i>
                        </div>
                    </div>
                </div>

            </div>
            <!-- 4-blocks row end -->
            <form>
                @include('components.form-input', [
                    'type' => 'text',
                    'name' => 'ahihi',
                    'labelName' => 'Ho Ten'
                ])
                @include('components.form-input', [
                    'type' => 'password',
                    'name' => 'password',
                    'labelName' => 'password'
                ])
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Submit
                </button>
            </form>
        </div>
        <!-- Main content ends -->
        <!-- Container-fluid ends -->
    </div>
@endsection

@section('style')
    <!-- Weather css -->
    <link href="/cuccutto/assets/css/svg-weather.css" rel="stylesheet">

    <!-- Echart js -->
    <script src="/cuccutto/assets/plugins/charts/echarts/js/echarts-all.js"></script>
@endsection
@section('script')
    <!-- Rickshaw Chart js -->
    <script src="/cuccutto/assets/plugins/d3/d3.js"></script>
    <script src="/cuccutto/assets/plugins/rickshaw/rickshaw.js"></script>
    <script type="text/javascript" src="/cuccutto/assets/pages/dashboard.js"></script>
@endsection



