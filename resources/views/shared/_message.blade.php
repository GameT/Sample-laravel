@foreach(['danger','warning','success','info'] as $msg)
    <div class="falsh-message">
        @if(session()->has($msg))
            <p class="alert alert-{{$msg}}">
                {{ session()->get($msg) }}
            </p>
        @endif
    </div>
@endforeach