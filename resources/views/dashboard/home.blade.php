@extends('layouts.dashboard.app')
@section('content')
    <div class="col-12 ">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h4 class="card-title text-white">Welcome</h4>
                <p class="card-text">Welcome {{ auth()->user()->userable->name}}</p>
            </div>
        </div>
    </div>
@endsection
