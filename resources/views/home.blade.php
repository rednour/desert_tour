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
                    <a href="{{route('clients.show',['client'=> Auth::user()->id])}}"><button class="btn btn-light">profile</button> </a>
                    <a href="{{route('home')}}"> <button class="btn btn-light">home</button> </a>
                    

                </div
            </div>
        </div>
    </div>
</div>
@endsection
