@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <nav aria-label="breadcrumb bg-light">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>                        
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary fw-bold shadow">Product</button>
                <button class="btn btn-primary fw-bold shadow">News & Project</button>
                <button class="btn btn-primary fw-bold shadow">Other</button>
            </div>
        </div>
    </div>
</section>
@endsection