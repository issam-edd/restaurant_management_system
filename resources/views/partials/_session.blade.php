@if(session('success'))
    <div class="alert alert-success p-1">
        <p>{{ session('success') }}</p>
    </div>
@elseif(session('warning'))
    <div class="alert alert-warning p-1">
        <p>{{ session('warning') }}</p>
    </div>
@elseif(session('danger'))
    <div class="alert alert-danger p-1">
        <p>{{ session('danger') }}</p>
    </div>
@endif
