@extends ('layouts.master')
@section('content')
@php
$polling_unit=DB::select("SELECT * FROM polling_unit");
$party=DB::select("SELECT * FROM party");
$ward=DB::select("SELECT * FROM ward");
$lga=DB::select("SELECT * FROM lga");
@endphp
<div class="content">
    <div class="container-fluid">
        <div class="row p-3">
            <div class="col-xs-6 col-sm-3">
                <div class="card-box widget-flat border-custom bg-custom text-white">
                    <i class="fi-tag"></i>
                    <h3 class="m-b-10">{{ count($polling_unit) }}</h3>
                    <p class="text-uppercase m-b-5 font-13 font-600">Total Polling Units</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="card-box bg-primary widget-flat border-primary text-white">
                    <i class="fi-archive"></i>
                    <h3 class="m-b-10">{{ count($lga) }}</h3>
                    <p class="text-uppercase m-b-5 font-13 font-600">Total LGA</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="card-box widget-flat border-success bg-success text-white">
                    <i class="fi-help"></i>
                    <h3 class="m-b-10">{{ count($party) }}</h3>
                    <p class="text-uppercase m-b-5 font-13 font-600">Total Party</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="card-box bg-danger widget-flat border-danger text-white">
                    <i class="fi-delete"></i>
                    <h3 class="m-b-10">{{ count($ward) }}</h3>
                    <p class="text-uppercase m-b-5 font-13 font-600">Total Ward</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@endsection