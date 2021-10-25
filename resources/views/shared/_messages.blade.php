@foreach(['success', 'warning', 'info', 'danger'] as $msg)
  @if(session()->has($msg))
    <div class="flash-message">
      <p class="alert alert-{{ $msg }}">
        {{ session()->get() }}
      </p>
    </div>
  @endif
@endforeach
