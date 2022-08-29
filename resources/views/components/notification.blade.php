@if ($msg = Session::get ('success'))
    <div class="bg-success text-white">
        {{ $msg }}
    </div>

@elseif ($msg = Session::get ('error'))
    <div class="bg-danger text-white">
        {{ $msg }}
    </div>
@endif