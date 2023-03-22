@if($errors->any())
    <div class="alert alert-danger p-1">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
