
 @extends('layouts.dashboard.app')

 @section('breadcrumbs')
     <h2 class="content-header-title float-left mb-0">Table Orders</h2>
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
                 <h4 class="card-title">Tables Orders List</h4>
                 
             </div>
             <div class="card-body">
                 @include('partials._session')
                 <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover">
                         
                             <thead>
                             <tr>
                                 <th>meal name</th>
                                 <th>price</th>
                                 <th>Action</th>
                                 {{-- <th class="text-center">Actions</th> --}}
                             </tr>
                             </thead>
                             <tbody>
                                @foreach($tableorders as $tableorder)
                                    <tr>
                                        <td>
                                            T{{ $tableorder->id}}
                                        </td>
                                        @php
                                            $total=0;
                                        @endphp
                                    @foreach ($tableorder->meals as $meal)
                                        @php
                                            $total+=$meal->pivot->price*$meal->pivot->quantity;
                                        @endphp
                                    @endforeach
                                        <td>{{$total}}</td>
                                        <td class="text-center">
                                            <a
                                                class="btn btn-icon rounded-circle btn-flat-danger"
                                                href="{{ route('dashboard.invoice.tableorder', $tableorder->id) }}"
                                            >
                                                <i data-feather="printer"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                             </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 @endsection
 
 @section('page-scripts')
     
 @endsection
 
 
 