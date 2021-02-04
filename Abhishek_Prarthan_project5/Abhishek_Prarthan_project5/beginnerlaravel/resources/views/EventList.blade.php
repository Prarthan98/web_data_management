<!DOCTPE html>
<html>
<head>
    <title>View Events</title>
    <style type="text/css">
        .crsr-ptr:hover{
    background-color: #1e1e1e;
    opacity:0.4; 
    color:#ffffff;
        }
    </style>
</head>
<body class="mb-3 pd-3">
    @include('./layouts/header')
    <br>
    <br>
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

    <table class="table pt-3 mt-3">
        <thead>
            <tr>
        <td><strong>Event Id</strong></td>
        <td><strong>Event Name</strong></td>
        <td><strong>Event Description</strong></td>
        <td><strong>Event Location</strong></td>
        <td><strong>Event Date</strong></td>
        <td><strong>Event Time</strong></td>
        <td><strong>Register</strong></td>  
            </tr>
        </thead>
    @foreach ($events as $event)
        <tr class="crsr-ptr" id="event" value="mk" onclick="window.location='{{url("EventUser")}}',myFunction({{$event->EventId }})">
            <td>{{ $event->EventId }}</td>
            <td>{{ $event->EventName }}</td>
            <td>{{ $event->EventDescription }}</td>
            <td>{{ $event->EventLocation }}</td>
            <td>{{ $event->EventDate }}</td>
            <td>{{ $event->EventTime }}</td>
            <td>
                <a>UserDetails</a>
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
<br>
<br>

<br>
<br>
<br>
</body>
<!-- <div style="position: absolute;bottom: 0;width:100%;"> -->
@include('./layouts/footer')
<!-- </div> -->
<script>

    function myFunction(item) {
        var id1 = document.getElementById('event').value;
    console.log('Hello',item);
    localStorage.setItem("eventId", item);
  // document.getElementById("myText").value = "Johnny Bravo";
}
</script>
</html>