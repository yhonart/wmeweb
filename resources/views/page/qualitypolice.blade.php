@extends('layouts.app')
@section('content')
<div class="container-fluid bg-primary p-5 hero-header mb-5">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h2 class="display-2 fw-semibold text-white animated zoomIn">@lang('company.komitmen')</h2>            
        </div>
    </div>
</div>
<section>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-12 mb-2">
                @lang('company.komitmendesc')
                @lang('company.komitmenmore')
            </div>            
        </div>        
    </div>
</section>
@endsection