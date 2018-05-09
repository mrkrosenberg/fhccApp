@extends('layouts.app')
    @section('content')
        <h1>{{$title}}</h1>
        <p>

            <!-- add google calendar to track events -->
            <iframe src="https://calendar.google.com/calendar/embed?src=1eh8ct9kuig9i97sfrf6qud8to%40group.calendar.google.com&ctz=America%2FDenver" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </p>
    @endsection