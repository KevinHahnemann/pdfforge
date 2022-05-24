@extends('base')

@section('body_id'){{ trim('landingpage') }}@stop

@section('contend')
    <div class="headline">PDFCreator</div>

    <div>Current Version:</div>
    <div class="version">{{ $version['version'] }}</div>

    <div>Release Date:</div>
    <div class="releaseDate">{{ date('d.m.Y', strtotime($version['releaseDate'])) }}</div>

    <div class="downloads">
        <span class="material-symbols-outlined">download</span>
        <div class="sub-headline">Downloads</div>
        @foreach($version['downloads'] as $download)
            <span class="material-symbols-outlined">chevron_right</span>
            <a href="{{ url($download->sourceUrl) }}" class="downloadlink">
                {{ $download->persistentName }}
            </a>
        @endforeach
    </div>

    <a href="{{ url('/changelog/') }}" class="changelog">Changelog</a>
@stop
