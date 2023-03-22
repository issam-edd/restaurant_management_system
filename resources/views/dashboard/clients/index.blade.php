@extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Clients</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Clients List</h4>
                    <a
                        class="btn btn-success waves-effect waves-float waves-light"
                        href="{{ route('dashboard.clients.create') }}"
                    >
                        <i data-feather="plus-circle"></i>
                        <span>Add</span>
                    </a>
            </div>
            <div class="card-body">
                @include('partials._session')
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        @if($clients->count() <= 0)
                            <tbody>
                            <tr>
                                <td>Empty</td>
                            </tr>
                            </tbody>
                        @else
                            <thead>
                            <tr>
                                <th></th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $index=>$client)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>
                                        {{ $client->first_name." ".$client->last_name}}
                                    </td>
                                    <td>
                                        {{ $client->email  }}
                                    </td>
                                    <td>
                                        {{ $client->adress  }}
                                    </td>
                                        <td>
                                        {{ $client->phone }}
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-icon btn-flat-primary">
                                                <i data-feather="eye"></i>
                                            </a>
                                                <a
                                                    class="btn btn-icon rounded-circle btn-flat-warning"
                                                    href="{{ route('dashboard.clients.edit', $client->id) }}"
                                                >
                                                    <i data-feather="edit-2"></i>
                                                </a>
                                                <form
                                                    action="{{ route('dashboard.clients.destroy', $client->id) }}"
                                                    method="POST"
                                                    class="d-inline-block"
                                                >
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <button
                                                        class="btn btn-icon rounded-circle btn-flat-danger delete"
                                                        type="submit"
                                                    >
                                                        <i data-feather="trash-2"></i>
                                                    </button>
                                                </form>
                                        </td>
                                </tr>
                            @endforeach
                            </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script>
        document.getElementById('menu_client').classList.add('active');

        $(document).ready(function(){
            $(".delete").click(function(e){
                if(!confirm('Are you sure?')){
                    e.preventDefault();
                    return false;
                }
                return true;
            });
        });
    </script>
@endsection
