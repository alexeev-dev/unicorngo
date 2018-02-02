@extends('layouts.dashboard')

@section('content')
    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <div class="">
                <div class="page-header-title">
                    <h4 class="page-title">Welcome</h4>
                </div>
            </div>

            <div class="page-content-wrapper ">

                <div class="container">

                    <!-- Inline Form -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h4 class="m-t-0 m-b-30">Personal data</h4>

                                    @if (strlen($user->eth_address) != 42)

                                        <form class="form-inline" method="post" action="{{ route('setwallet') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Ethereum wallet address</label>
                                                <input type="text" class="form-control" id="wallet" name="wallet" placeholder="Enter ethereum address"  >
                                            </div>

                                            <button type="submit" class="btn btn-danger waves-effect waves-light m-l-10">Set wallet address</button>

                                        </form>
                                    @else

                                        {{ $user->eth_address  }} <br>
                                        {{ $user->email  }}

                                    @endif

                                </div> <!-- panel-body -->
                            </div> <!-- panel -->
                        </div> <!-- col -->

                    </div> <!-- End row -->

                </div><!-- container -->


            </div> <!-- Page content Wrapper -->
        </div> <!-- content -->

        <footer class="footer">
            © 2018 UnicornGO - All Rights Reserved.
        </footer>

    </div>
    <!-- End Right content here -->
@endsection