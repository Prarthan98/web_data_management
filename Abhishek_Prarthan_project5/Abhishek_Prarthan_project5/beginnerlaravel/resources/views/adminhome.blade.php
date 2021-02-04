@extends('layouts.app')
@include('./layouts/header')
@section('content')
    <div class="container">
        <!-- <div class="row justify-content-center">
              <div class="row txt-cntr">
        <div class="col-sm-12">
<button class="btn btn-primary" onclick="window.location='{{url("adminevents")}}'" >View All Events</button>&nbsp;&#8212;>&nbsp;<button class="btn btn-success" onclick="window.location='{{url("registerEvent")}}'" >Create Events</button>       </div>
    </div> -->
    <br>
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3 class="txt-cntr">Welcome User</h3>
                        <div class="row">
                        @if (Route::has('register'))
                        <div class="col-sm-6">
                            <button class="btn btn-primary" onclick="window.location='{{url("adminevents")}}'" >View All Events</button>
                        </div>
                        @endif
                        @if (Route::has('register'))
                        <div class="col-sm-6">
                            <button class="btn btn-success flt-rght" onclick="window.location='{{url("registerEvent")}}'" >Create Event</button>
                        </div>
                        @endif
                        @if (Route::has('register'))
                         <!--    <button onclick="window.location='{{url("viewparticipants")}}'" >See All Participants</button> -->
                        @endif
                    </div>
                </div>
                </div>
            </div>
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
@include('./layouts/footer')
@endsection