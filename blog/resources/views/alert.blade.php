@if(session()->get('success'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
    </div>
@endif

@if(session()->get('error'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('error') }}
    </div>
@endif

@if(session()->get('must'))
    <div class="alert alert-danger" role="alert">
        {{ session()->get('must') }}
    </div>
@endif