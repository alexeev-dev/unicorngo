@extends('layouts.dashboard')

@section('content')
    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <div class="">
                <div class="page-header-title">
                    <h4 class="page-title">Welcome to UnicorGo Universe</h4>
                </div>
            </div>

            <div class="page-content-wrapper ">

                <div class="container">

                    <!-- Inline Form -->
                    <div class="row">
                        <div class="col-md-6">
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
                                        {{ $user->eth_address }}
                                    @endif

                                </div> <!-- panel-body -->
                            </div> <!-- panel -->
                        </div> <!-- col -->

                    </div> <!-- End row -->

                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h2>1 CANDY = 0.0005 ETH <small>ONLY 1,000,000 CANDYCOINS</small></h2>
                                    <p class="text-muted m-b-30">To buy CANDYCOIN, we recommend using a wallet opened at <a href="https://www.myetherwallet.com/" target="_blank">myetherwallet.com</a>. You can send your money directly to contract "<mark>0x34d1857175EB5693bBee49c214E2cd44b2F3058c</mark>" or use the following QR-code:</p>

                                    <p><b>minimum gas limit: 77000 units</b></p>
                                    <img src="assets/images/code.gif" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/wO_-Rg1uVsI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                            <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/g2QsVYhYU-Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>

                </div><!-- container -->


            </div> <!-- Page content Wrapper -->
        </div> <!-- content -->

        <footer class="footer">
            © 2018 UnicornGO - All Rights Reserved.
        </footer>

    </div>
    <!-- End Right content here -->
@endsection