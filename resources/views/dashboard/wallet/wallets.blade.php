@extends('dashboard.layout.app')

@section('body-class','2-column')
@section('page-name','Wallet')

@push('css')
<link rel="stylesheet" type="text/css" href="/css/pages/datatables.min.css">
@endpush

@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center">
                    <h4 class="card-title"> Wallets</h4>
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal-feed" data-target="#modal_sm" data-feed="">Add New</button>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <!-- <th>name</th>     -->
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Company Detail</th>
                                        <th>Balance</th>
                                        <th>Distributor balance</th>
                                        <th>Credit</th>
                                        <th>Value to be credited</th>
                                        <th>Request Reimbursement</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($resellers as $reseller)
                                    <tr>
                                        <td>{{ $reseller['name'] }}</td>
                                        <td>{{ $reseller['email'] }}</td>
                                        <td><button type="button" class="btn btn-xs btn-icon btn-outline-primary mr-1 waves-effect waves-light" data-toggle="modal-feed" data-target="#modal_sm" data-feed="accounts/balance/add/{{ $reseller['id'] }}"><i class="feather icon-eye"></i></button></td>
                                        <td>{{ number_format($reseller['balance_value'],2) .' '.@OTIFSolutions\Laravel\Settings\Models\Setting::get('reloadly_currency') }}</td>
                                        <td>{{ number_format($reseller['balance_value'],2) .' '.@OTIFSolutions\Laravel\Settings\Models\Setting::get('reloadly_currency') }}</td>
                                        <td><button type="button" class="btn btn-xs btn-icon btn-outline-primary mr-1 waves-effect waves-light" data-toggle="modal-feed" data-target="#modal_sm" data-feed="accounts/balance/add/{{ $reseller['id'] }}"><i class="feather icon-dollar-sign"></i></button></td>
                                        <td><input type="text" class="form-control" placeholder="Value"></td>
                                        <td><button type="button" class="btn btn-xs btn-icon btn-outline-primary mr-1 waves-effect waves-light" data-toggle="modal-feed" data-target="#modal_sm" data-feed="accounts/balance/add/{{ $reseller['id'] }}"><i class="feather icon-send"></i></button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Company</th>
                                        <th>Email</th>
                                        <th>Company Detail</th>
                                        <th>Balance</th>
                                        <th>Distributor balance</th>
                                        <th>Credit</th>
                                        <th>Value to be credited</th>
                                        <th>Request Reimbursement</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('dashboard.layout.modals')
@endsection

@push('js')
<script src="/js/datatable/pdfmake.min.js"></script>
<script src="/js/datatable/vfs_fonts.js"></script>
<script src="/js/datatable/datatables.min.js"></script>
<script src="/js/datatable/datatables.buttons.min.js"></script>
<script src="/js/datatable/buttons.html5.min.js"></script>
<script src="/js/datatable/buttons.print.min.js"></script>
<script src="/js/datatable/buttons.bootstrap.min.js"></script>
<script src="/js/datatable/datatables.bootstrap4.min.js"></script>
<script>
    $('.zero-configuration').DataTable();
</script>
<script src="//js.stripe.com/v3/"></script>
@endpush