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
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 col-12">
                <img src="{{asset('public/images/login.jpg')}}" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('public/images/wme_logo.png')}}" alt="" srcset="" class="img-fluid">
                        <p class="text-center">Admin Login</p>
                        <form>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="Text" name="Text" id="Text" autocomplete="off" placeholder="Text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="Text" name="Text" id="Text" autocomplete="off" placeholder="Text" class="form-control">
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection