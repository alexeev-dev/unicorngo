@extends('layouts.dashboard')

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <div class="">
                <div class="page-header-title">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>

            <div class="page-content-wrapper ">

                <div class="container">

                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="panel text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title text-muted font-light">Candy coin</h4>
                                </div>
                                <div class="panel-body p-t-10">
                                    @if (strlen($user->eth_address) != 42)
                                        <a  href="{{ route('profile') }}" class="btn btn-danger waves-effect waves-light m-l-10 m-t-0 m-b-15" >Set wallet address</a>
                                    @else
                                        <h2 class="m-t-0 m-b-15"><b>{{ $user->balanceOf() }}</b></h2>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="panel text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title text-muted font-light">Unicorn</h4>
                                </div>
                                <div class="panel-body p-t-10">
                                    <h2 class="m-t-0 m-b-15"><b>-</b></h2>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="panel text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title text-muted font-light">Candy Land</h4>
                                </div>
                                <div class="panel-body p-t-10">
                                    <h2 class="m-t-0 m-b-15"><b>-</b></h2>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="panel text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title text-muted font-light">Saint Candy Tree</h4>
                                </div>
                                <div class="panel-body p-t-10">
                                    <h2 class="m-t-0 m-b-15"><b>-</b></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="panel">
                                <div class="panel-body">
                                    <h4 class="m-b-30 m-t-0">New affiliates</h4>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Wallet</th>
                                                        <th>Date</th>
                                                      <!--  <th>Salary</th>-->
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                    @foreach ($refs as $ref)

                                                        <tr>
                                                            <td>{{ $ref->eth_address }}</td>
                                                            <td>{{ $ref->created_at }}</td>
                                                            <!-- <td>$320,800</td>-->
                                                        </tr>
                                                    @endforeach



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-md-5">
                            <div class="panel">
                                <div class="panel-body">
                                    <h4 class="m-b-30 m-t-0">Presale Stage</h4>

                                    <p class="font-600 m-b-5">0.0001 Eth per Candy <span class="text-primary pull-right"><b>100%</b></span></p>
                                    <div class="progress  m-b-20">
                                        <div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        </div><!-- /.progress-bar .progress-bar-danger -->
                                    </div><!-- /.progress .no-rounded -->

                                    <p class="font-600 m-b-5">0.0005 Eth per Candy <span class="text-primary pull-right"><b>20%</b></span></p>
                                    <div class="progress  m-b-20">
                                        <div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                        </div><!-- /.progress-bar .progress-bar-pink -->
                                    </div><!-- /.progress .no-rounded -->

                                    <p class="font-600 m-b-5">0.001 Eth per Candy <span class="text-primary pull-right"><b>0%</b></span></p>
                                    <div class="progress  m-b-20">
                                        <div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;">
                                        </div><!-- /.progress-bar .progress-bar-info -->
                                    </div><!-- /.progress .no-rounded -->

                                    <p class="font-600 m-b-5">0.0015 Eth per Candy <span class="text-primary pull-right"><b>0%</b></span></p>
                                    <div class="progress  m-b-20">
                                        <div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 0;">
                                        </div><!-- /.progress-bar .progress-bar-warning -->
                                    </div><!-- /.progress .no-rounded -->
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -- -->

                </div><!-- container -->


            </div> <!-- Page content Wrapper -->
        </div> <!-- content -->

        <footer class="footer">
            © 2018 UnicornGO - All Rights Reserved.
        </footer>

    </div>
@endsection