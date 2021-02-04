@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Event Registeration') }}</div>
                    @foreach ($eventData as $event)
                    <div class="card-body">
                        <form method="POST" action="/updateEventExtended" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="eventName" class="col-md-4 col-form-label text-md-right">{{ __('Event Name') }}</label>

                                <div class="col-md-6">
                                    <input id="eventName" type="text" class="form-control @error('eventName') is-invalid @enderror" name="eventName" value="{{ $event->EventName }}" required autocomplete="eventName" autofocus >

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="eventDescription" class="col-md-4 col-form-label text-md-right">{{ __('Event Description') }}</label>

                                <div class="col-md-6">
                                    <input id="eventDescription" type="text" class="form-control @error('eventDescription') is-invalid @enderror" name="eventDescription" value="{{ $event->EventDescription }}" required autocomplete="eventDescription" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="eventLocation" class="col-md-4 col-form-label text-md-right">{{ __('Event Location') }}</label>

                                <div class="col-md-6">
                                    <input id="eventLocation" type="text" class="form-control @error('eventLocation') is-invalid @enderror" name="eventLocation" value="{{ $event->EventLocation }}" required autocomplete="eventLocation" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="eventDate" class="col-md-4 col-form-label text-md-right">{{ __('Event Date') }}</label>

                                <div class="col-md-6">
                                    <input id="eventDate" type="date" class="form-control @error('eventDate') is-invalid @enderror" name="eventDate" value="{{ $event->EventDate }}" required autocomplete="eventDate" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="eventTime" class="col-md-4 col-form-label text-md-right">{{ __('Event Date') }}</label>

                                <div class="col-md-6">
                                    <input id="eventTime" type="time" class="form-control @error('eventTime') is-invalid @enderror" name="eventTime" value="{{ $event->EventTime }}" required autocomplete="eventTime" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <input id="eventId" type="hidden" name="eventId" value="{{ $event->EventId }}">
                            </div>
                            @endforeach
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Event') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection