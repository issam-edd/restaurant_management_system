@extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Client Bills</h2>
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
                <h4 class="card-title">Client Bills List</h4>
                <a
                    class="btn btn-success waves-effect waves-float waves-light"
                    href="{{ route('dashboard.client-bills.create') }}"
                >
                    <i data-feather="plus-circle"></i>
                    <span>Add</span>
                </a>
            </div>
            <div class="card-body">
                @include('partials._session')
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        @if($clientbills->count() <= 0)
                            <tbody>
                            <tr>
                                <td>Empty</td>
                            </tr>
                            </tbody>
                        @else
                            <thead>
                            <tr>
                                <th></th>
                                <th>Client Order</th>
                                <th>type</th>
                                <th>total</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clientbills as $index=>$clientbill)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>

                                    <td>
                                        {{ $clientbill->client_orders_id?? '-' }}
                                    </td>
                                    <td>
                                        {{ $clientbill->type?? '-' }}
                                    </td>
                                    <td>
                                        {{ $clientbill->total?? '-' }}
                                    </td>
                                    <td class="text-center">
                                        <a
                                            class="btn btn-icon rounded-circle btn-flat-warning"
                                            href="{{ route('dashboard.client-bills.edit', $clientbill->id) }}"
                                        >
                                            <i data-feather="edit-2"></i>
                                        </a>
                                        <form
                                            action="{{ route('dashboard.client-bills.destroy', $clientbill->id) }}"
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
