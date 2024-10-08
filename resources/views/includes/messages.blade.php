@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
@if ($message = Session::get('warning'))
    <div class="alert alert-warning" role="alert">
        {{ $message }}
    </div>
@endif
