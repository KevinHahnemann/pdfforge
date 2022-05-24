@extends('base')

@section('body_id'){{ trim('changelog') }}@stop

@section('contend')
    <a href="{{ url('/') }}" class="landingpage">Back to Downloads</a>
    <div class="headline">Changelog</div>

    @foreach($changelog as $headline => $changes)
        <div class="sub-headline">{{ $headline }}</div>

        <div class="changes">
            @foreach($changes as $change)
                <span class="material-symbols-outlined">chevron_right</span>
                <div class="change">{{ $change }}</div>
            @endforeach
        </div>
    @endforeach
@stop
