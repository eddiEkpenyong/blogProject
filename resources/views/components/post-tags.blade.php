@props(['tagsCsv'])

@php
    $badges = explode(',', $tagsCsv)
@endphp

    <span>Tags:</span>
        @foreach ($badges as $badge)
             <a href="/?badge={{$badge}}" class="badge badge-secondary">{{$badge}}</a>
        @endforeach

