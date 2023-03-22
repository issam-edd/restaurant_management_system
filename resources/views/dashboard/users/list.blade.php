@extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Users</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Users list</h4>
                    <a
                        class="btn btn-success waves-effect waves-float waves-light"
                        href="{{ route('dashboard.users.create') }}"
                    >
                        Add
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        @if($users->count() <= 0)
                            <tbody>
                            <tr>
                                <td>Empty</td>
                            </tr>
                            </tbody>
                        @else
                        <thead>
                        <tr>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $index=>$user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <a href="{{route('dashboard.users.edit',$user->id)}}" class="btn btn-icon btn-flat-warning">
                                    <i data-feather="lock"></i>
                                </a>
                                <form
                                    action="{{ route('dashboard.users.destroy', $user->id) }}"
                                    method="POST"
                                    class="d-inline-block"
                                >
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-icon btn-flat-danger">
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
    <!-- Striped rows end -->
@endsection

@section('page-scripts')
    <script>
        document.querySelector('#users-item').classList.add('active');
    </script>
@endsection
