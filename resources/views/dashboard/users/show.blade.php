@extends("layouts.dashboard.app")

@section("breadcrumbs")
    <h2 class="content-header-title float-left mb-0">User Details</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.users.index') }}">Users</a>
            </li>
        </ol>
    </div>
@endsection

@section("content")
    {{--row
    col-lg-6 sm-12
    card
    title
    body--}}
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <div class="card-body ml-5">
                    <div class="d-flex  ">


                        <div  id="username">
                            <i data-feather="user" class="mr-1"></i>
                            <span>Username</span>
                        </div>
                        <p class="ml-3" >{{$user->email}}</p>
                    </div><hr>
                    <div class="d-flex  ">
                        <div  id="mail">
                            <i data-feather="mail" class="mr-1"></i>
                            <span class="mr-3">Mail</span>
                        </div>
                        <p class="ml-3" >{{$user->email}}</p>
                    </div><hr>
                    <div class="d-flex  ">
                        <div  id="role">
                            <i data-feather="star" class="mr-1"></i>
                            <span class="mr-3">Role</span>
                        </div>
                        <p class="ml-3" >{{$user->role}}</p>
                    </div><hr>
                    <div class="d-flex  ">
                        <div  id="contact">
                            <i data-feather="phone" class="mr-1"></i>
                            <span class="">Contact</span>
                        </div>
                        <p class="ml-4" >{{$user->role}}</p>

                    </div>
                </div>
                <div class="d-flex justify-content-end mr-2 mb-2">
                    <a href="{{route('dashboard.users.edit',$user->id)}}" class="btn btn-warning">Edit</a>
                    <button class="btn btn-outline-danger ml-1">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection
