@extends('layouts.app')
@section('content')
<div class="container-fluid bg-primary p-5 hero-header">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h2 class="display-2 fw-semibold text-white animated zoomIn">@lang('company.qms')</h2>            
        </div>
    </div>
</div>
<section class="page-bg">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-12 mt-5 mb-5">
                @lang('company.manajemenmutudesc')
                @lang('company.manajemenmutudescmore')
            </div>            
        </div>        
    </div>
</section>
@endsection