@extends('layouts.app')
@include('./layouts/header')
@section('content')
<div class="container-fluid">
  <div class="row txt-cntr">
        <div class="col-sm-12">
<button class="btn btn-primary" onclick="window.location='{{url("EventList")}}'" >View All Events</button>&nbsp;&#8212;>&nbsp;<button class="btn btn-success" onclick="window.location='{{url("EventUser")}}'" >Event User</button>&nbsp;&#8212;>&nbsp;<button class="btn btn-info" onclick="window.location='{{url("registeredEvents")}}'" >Registered Events</button>        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-12">
    <table  class="table mb-3 pd-3" border = "1">
        <tr>
            <td><strong>Event Name</td>
            <td><strong>Event Description</td>
            <td><strong>Event Location</td>
            <td><strong>Event Date</td>
            <td><strong>Event Time</td>
            <td><strong>Participants</td>
            <td><strong>Update</td>
            <td><strong>UnRegister</td>
        </tr>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->EventName }}</td>
                <td>{{$event->EventDescription}}</td>
                <td>{{$event->EventLocation}}</td>
                <td>{{$event->EventDate}}</td>
                <td>{{$event->EventTime}}</td>
                <td>{{ $event->Participants }}</td>
                <td>
                    <form action="/check" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="userId" value="{{Auth::user()->id}}">
                        <input type="hidden" name="eventId" value="{{$event->EventId}}">
                        <button type="submit" onclick="myFunction({{ $event->EventId }})" class="btn btn-primary"> {{ __('Update') }} </button>
                    </form>
                </td>
                <td><form action="/delete" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" name="userId" value="{{Auth::user()->id}}">
                        <input type="hidden" name="eventId" value="{{$event->EventId}}">
                        <button type="submit" class="btn btn-primary"> {{ __('UnRegister') }} </button>
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
    <br>
    <br>
    <br>
    <br>

    <script>

        function myFunction(item) {
            localStorage.setItem("uid", item);
            // document.getElementById("myText").value = "Johnny Bravo";
        }
    </script>
  
    <!-- <div style="position: absolute;bottom: 0;width: 100%;"> -->
    
<!-- </div> -->
 @include('./layouts/footer') 
@endsection
