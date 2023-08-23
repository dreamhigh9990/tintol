@extends('dashboard.layout.app')

@section('body-class','2-column')
@section('page-name','Video')

@push('css')
@endpush

@section('content')
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-center align-items-center">
                    <h4 class="card-title">Video Conference</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard text-center">
                        <div class="table-responsive">
                            <video width="600" controls>
                                <source src="mov_bbb.mp4" type="video/mp4">
                                <source src="mov_bbb.ogg" type="video/ogg">
                                Your browser does not support HTML video.
                            </video>
                        </div>
                    </div>
                </div>
                <div style="text-align:center; margin:25px">
                    <form action="welcome.php" method="post">
                    <label for="email">Enter client email:</label><br>
                        <input type="text" name="email" value="" text="email">
                    </form>
                    <br>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Connect</button>
                </div>

            </div>
        </div>
    </div>
</section>
@include('dashboard.layout.modals')
@endsection

@push('js')
@endpush