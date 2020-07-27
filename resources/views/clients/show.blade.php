@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">profile</div>

                <div class="card-body">
                    <a href="{{route('clients.show',['client'=> Auth::user()->id])}}"><button class="btn btn-light">profile</button> </a>
                    <a href="{{route('home')}}"> <button class="btn btn-light">home</button> </a>
                    <h1>{{$data->name}}</h1>
<h1>{{$data->prenom}}</h1>
<h1>{{$data->date_birth}}</h1>
<h1>{{$data->telephone}}</h1>
<h1>{{$data->sex}}</h1>

                </div
            </div>
        </div>
    </div>
</div>

@endsection