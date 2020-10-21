@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div clas="link">
    <a href="{{ url('/list') }}"> <p>Product list page </p></a>
    <a href="{{ url('/add') }}"><p> new Product add page</p> </a>
    <a href="{{ url('/contact') }}"><p> Contact page </p></a>
    </div>
</div>
@endsection
