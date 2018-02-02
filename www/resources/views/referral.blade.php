@extends('layouts.dashboard')

@section('content')
    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <div class="">
                <div class="page-header-title">
                    <h4 class="page-title">Referral program</h4>
                </div>
            </div>

            <div class="page-content-wrapper ">

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title text-muted font-light">Available for withdrawal:</h4>
                                </div>
                                <div class="panel-body p-t-10">
                                    <h2 class="m-t-0 m-b-15">
                                        <i class="m-r-10">
                                            <img class="ether" src="assets/images/ether.png">
                                        </i>
                                        <b>-</b></h2>
                                </div>
                            </div>

                            <div class="panel text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title text-muted font-light">Earned for the entire period of time:</h4>
                                </div>
                                <div class="panel-body p-t-10">
                                    <h2 class="m-t-0 m-b-15"><i class="m-r-10">
                                            <img class="ether" src="assets/images/ether.png">
                                        </i><b>-</b></h2>
                                </div>
                            </div>

                           {{-- <div class="panel panel-primary">
                                <div class="panel-body">
                                    <h4 class="m-t-0 m-b-30">Wallet for ETH withdrawal:</h4>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><img class="ether" src="assets/images/ether.png"></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Not provided">
                                            <button type="button" class="btn btn-default btn-lg waves-effect m-t-10">WITHDRAW ETH</button>
                                        </div>
                                    </div>

                                    </form>
                                </div> <!-- panel-body -->
                            </div> <!-- panel -->--}}
                        </div>
                        <div class="col-md-8">
                            <div class="panel panel-primary">
                                <div class="panel-body">

                                    <form class="form-horizontal m-t-20">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Referral link</label>
                                            <div class="col-md-10">
                                                <input type="text" id="reflink" class="form-control" readonly="readonly" value="https://unicorngo.io/ref/{{ $user->affiliate_id }}">
                                                <span class="help-block"><small>All users registered using this llink will be your referrals. You will receive {{ $user->affiliate_percent }}% from their each purchase.</small></span>
                                                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="javascript:$('#reflink').select(); document.execCommand('copy');" >Copy Address</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="panel-body">

                                <h4 class="m-b-30 m-t-0">Your affiliates</h4>

                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Wallet</th>
                                        <th>Date</th>
                                    <!--  <th>Salary</th> -->
                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach ($refs as $ref)

                                        <tr>
                                            <td>{{ $ref->eth_address }}</td>
                                            <td>{{ $ref->created_at }}</td>
                                            <!-- <td>$320,800</td> -->
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>


                            </div>
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