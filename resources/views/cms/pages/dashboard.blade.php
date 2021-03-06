@extends('layouts.aMaster')
@section('pageTitle', 'Dashboard')
@section('mainContent')

        <div class="col-md-6 dashboard">
            <div class="card bg-primary p-20">
                <div class="media widget-ten">
                    <div class="media-left meida media-middle">
                        <span><i class="ti-bag f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2 class="color-white">278</h2>
                        <p class="m-b-0">New Posts</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 dashboard">
            <div class="card bg-pink p-20">
                <div class="media widget-ten">
                    <div class="media-left meida media-middle">
                        <span><i class="ti-comment f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2 class="color-white">278</h2>
                        <p class="m-b-0">New Comment</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 dashboard">
            <div class="card bg-success p-20">
                <div class="media widget-ten">
                    <div class="media-left meida media-middle">
                        <span><i class="ti-vector f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2 class="color-white">$27647</h2>
                        <p class="m-b-0">Bounce Rate</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 dashboard">
            <div class="card bg-danger p-20">
                <div class="media widget-ten">
                    <div class="media-left meida media-middle">
                        <span><i class="ti-location-pin f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2 class="color-white">278</h2>
                        <p class="m-b-0">Total Visitor</p>
                    </div>
                </div>
            </div>
        </div>      
@endsection