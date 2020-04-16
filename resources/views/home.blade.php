@extends('layouts.home_start')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @auth
                    {{--<div class="card-header">Dashboard</div>--}}
                    <div class="title m-b-md">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                @else
                    <div class="title m-b-md">
                        Please register
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection
