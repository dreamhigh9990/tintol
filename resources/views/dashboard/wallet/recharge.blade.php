@extends('dashboard.layout.app')

@section('body-class','2-column')
@section('page-name','Wallet')

@push('css')
<link rel="stylesheet" type="text/css" href="/css/pages/datatables.min.css">
@endpush

@section('content')

<head>
    <meta charset="utf-8" />
    <title>Tintol B to B - Recharger mon compte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="${pageContext.request.contextPath}/assets/images/logo.ico">
    <link href="${pageContext.request.contextPath}/assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" type="text/css" />
    <link href="${pageContext.request.contextPath}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="${pageContext.request.contextPath}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="${pageContext.request.contextPath}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        .slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #04AA6D;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #04AA6D;
  cursor: pointer;
}
    </style>
</head>

<body data-layout="horizontal" data-topbar="dark">
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Fund My Balance</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-3">
                                    <h5 class="font-size-14 mb-1 mt-0">Top-up value (in euros)</h5>
                                    <!-- <input type="text" id="range_02"> -->
                                    <div class="slidecontainer">
                                        <input type="range" min="1" max="1000" value="50" class="slider" id="myRange">
                                        <p>Value: <span id="demo"></span></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                                <div class="card plan-box">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 style="text-align: center;">Bank Card</h5>
                                            <p class="text-muted" style="text-align: center;">Immediately Accessible</p>
                                            <div>
                                                <!-- <button class="btn btn-primary" style="width:100%;" type="button" data-toggle="collapse" data-target="#bankcard" data-feed="/invoices/3/stripe/checkout" aria-expanded="false" aria-controls="bankcard">
                                                    Pay
                                                </button> -->
                                                <button class="w-100 btn btn-primary mb-1" data-toggle="modal-feed" data-target="#modal_sm" data-feed="/invoices/5/stripe/checkout"><i class="feather icon-credit-card"></i> Pay</button>
                                            </div>
                                            <!-- / Collapse buttons -->

                                            <!-- Collapsible element -->
                                            <div class="collapse" id="bankcard">
                                                <div class="mt-3">
                                                    Thank you, Your Balance has just been credited.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card plan-box">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 style="text-align: center;">Paypal</h5>
                                            <p class="text-muted" style="text-align: center;">Immediately Accessible</p>
                                            <div>
                                                <button class="btn btn-primary" style="width:100%;" type="button" data-toggle="collapse" data-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                                    Pay
                                                </button>
                                            </div>
                                            <!-- / Collapse buttons -->

                                            <!-- Collapsible element -->
                                            <div class="collapse" id="paypal">
                                                <div class="mt-3">
                                                    Thank you, Your Balance has just been credited.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card plan-box">

                                    <div class="media">
                                        <div class="media-body">
                                            <h5 style="text-align: center;">Payment</h5>
                                            <p class="text-muted" style="text-align: center;">Accessible after receipt of the transfer</p>
                                            <!-- Collapse buttons -->
                                            <div>
                                                <button class="btn btn-primary" style="width:100%;" type="button" data-toggle="collapse" data-target="#payment" aria-expanded="false" aria-controls="payment">
                                                    Pay
                                                </button>
                                            </div>
                                            <!-- / Collapse buttons -->

                                            <!-- Collapsible element -->
                                            <div class="collapse" id="payment">
                                                <div class="mt-3">
                                                    Request taken into account.<br /> Make the payment and send us the reference to finalize your purchase.<br />
                                                    Upon receipt of funds in our bank account you will be credited.
                                                </div>
                                            </div>
                                            <!-- / Collapsible element -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card plan-box">

                                    <div class="media">
                                        <div class="media-body">
                                            <h5 style="text-align: center;">Western Union</h5>
                                            <p class="text-muted" style="text-align: center;">Accessible after receipt of the transfer</p>
                                            <!-- Collapse buttons -->
                                            <div>
                                                <button class="btn btn-primary" style="width:100%;" type="button" data-toggle="collapse" data-target="#westonunion" aria-expanded="false" aria-controls="weston union">
                                                    Pay
                                                </button>
                                            </div>
                                            <!-- / Collapse buttons -->

                                            <!-- Collapsible element -->
                                            <div class="collapse" id="westonunion">
                                                <div class="mt-3">
                                                    Request taken into account.<br /> Make the payment and send us the reference to finalize your purchase.<br />
                                                    Upon receipt of funds in our bank account you will be credited.
                                                </div>
                                            </div>
                                            <!-- / Collapsible element -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rightbar-overlay"></div>
    </section>

</body>
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
    
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
<script src="//js.stripe.com/v3/"></script>
<script src="${pageContext.request.contextPath}/assets/libs/jquery/jquery.min.js"></script>
<script src="${pageContext.request.contextPath}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="${pageContext.request.contextPath}/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="${pageContext.request.contextPath}/assets/libs/simplebar/simplebar.min.js"></script>
<script src="${pageContext.request.contextPath}/assets/libs/node-waves/waves.min.js"></script>
<script src="${pageContext.request.contextPath}/assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="${pageContext.request.contextPath}/assets/js/pages/range-sliders.init.js"></script>
<script src="${pageContext.request.contextPath}/assets/js/app.js"></script>
@endpush