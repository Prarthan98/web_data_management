   
@extends('layouts.app')
 @include('./layouts/header')
@section('content')
<div class="container">
    <div class="row txt-cntr">
        <div class="col-sm-12">
<button class="btn btn-primary" onclick="window.location='{{url("EventList")}}'" >View All Events</button>&nbsp;&#8212;>&nbsp;<button class="btn btn-success" onclick="window.location='{{url("EventUser")}}'" >Event User</button>&nbsp;&#8212;>&nbsp;<button class="btn btn-info" onclick="window.location='{{url("registeredEvents")}}'" >Registered Events</button>        </div>
    </div>
    <div class="row txt-cntr justify-content-center mt-4 pt-4">
        <div class="col-sm-12  ">
            <h1>Welcome User</h1> 
        </div>
        <div class="col-md-8 mt-4 pd-4 mb-4 pb-4">
            <div class="card pb-4 mb-3 mt-4">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! 
                    
                </div>
                  <div class="col-sm-12">
         <h4>
            <a style="cursor: pointer;" onclick="window.location='{{url("EventList")}}'">EventList</a>
        </h4>
        </div>
            </div>
          
        </div>
        
    </div>
</div>
<br>
<br>
<br>

  @include('./layouts/footer')
@endsection

