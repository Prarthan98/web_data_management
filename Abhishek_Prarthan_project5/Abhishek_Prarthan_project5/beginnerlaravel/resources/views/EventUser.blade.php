@extends('layouts.app')
@include('./layouts/header')
@section('content')
    <div class="container">
          <div class="row txt-cntr">
        <div class="col-sm-12">
<button class="btn btn-primary" onclick="window.location='{{url("EventList")}}'" >View All Events</button>&nbsp;&#8212;>&nbsp;<button class="btn btn-success" onclick="window.location='{{url("EventUser")}}'" >Event User</button>&nbsp;&#8212;>&nbsp;<button class="btn btn-info" onclick="window.location='{{url("registeredEvents")}}'" >Registered Events</button>        </div>
    </div>
     <br>
    <br>
    <br>
        <br>
        <br>
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card mb-3 pb-3">
                    <div class="card-header">{{ __('EventRegisteration') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/p" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus readonly>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" autofocus readonly>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                            <div class="form-group row">
                                <label for="noOfParticipants" class="col-md-4 col-form-label text-md-right">{{ __('No Of Participants') }} </label>

                                <div class="col-md-6">
                                    <input id="noOfParticipants" type="text" class="form-control @error('noOfParticipants') is-invalid @enderror" name="noOfParticipants" value="{{ old('noOfParticipants') }}" required autocomplete="gender" autofocus>

                                    @error('noOfParticipants')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

<div>
<input id="eventId" type="hidden" name="eventId" value="localStorage.getItem('eventId');"></div>
<div>
<input id="userId" type="hidden" name="userId" value="{{ Auth::user()->id }}"></div>
<script>
	document.getElementById('eventId').value = localStorage.getItem('eventId');
	var x = document.getElementById('uid').value;
</script>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 mt-3 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    @include('./layouts/footer')
@endsection
