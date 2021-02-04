@extends('layouts.app')
 @include('./layouts/header')
@section('content')

<div class="container-fluid">
    <div class="row txt-cntr">
        <div class="col-sm-12">
          <button class="btn btn-primary" onclick="window.location='{{url("adminevents")}}'" >View All Events</button>&nbsp;&#8212;>&nbsp;
    <button class="btn btn-success" onclick="window.location='{{url("registerEvent")}}'" >Create Event</button> 
        </div>
    </div>
    <br>
    <br>
    <br>

<div class="row">
    <div class="col-sm-12">
    <table class="table" border = "1">
        <tr>
            <td>Event Name</td>
            <td>Event Description</td>
            <td>Event Location</td>
            <td>Event Date</td>
            <td>Event Time</td>
            <td>Update</td>
            <td>Delete</td>
        </tr>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->EventName }}</td>
                <td>{{$event->EventDescription}}</td>
                <td>{{$event->EventLocation}}</td>
                <td>{{$event->EventDate}}</td>
                <td>{{$event->EventTime}}</td>
                <td>
                    <form action="updateEvent" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="eventId" value="{{$event->EventId}}">
                        <button type="submit"  class="btn btn-primary"> {{ __('Update') }} </button>
                    </form>
                </td>
                <td><form action="/delete" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="eventId" value="{{$event->EventId}}">
                        <button type="submit" class="btn btn-primary"> {{ __('Delete') }} </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
    @include('./layouts/footer')
    </body>
    </html>
@endsection