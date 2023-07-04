@foreach ($cons as $message)

@if ($message->user_sent != Auth::user()->id)
{{ $message->contenu }}<br> 
@endif


@if ($message->user_received == Auth::user()->id)
{{ $message->contenu }}<br> 
@endif
@if ($message->user_sent == Auth::user()->id)
{{ $message->contenu }}<br> 
@endif

{{-- 
@if ($message->user_sent == Auth::user()->id)
{{ $message->contenu }}<br> 
@elseif ($message->user_sent != Auth::user()->id)
{{ $message->contenu }}<br>
@endif --}}


@endforeach