<!-- resources/views/events/create.blade.php -->
@extends('layouts.master')

@section('content')

   <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
    </div>

        <!-- New Event Form -->
        <form action="{{ url('event') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <!-- Event Name -->
            <div class="form-group">
                <label for="event-title" class="col-sm-3 control-label">Event</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="event-title" class="form-control">
                </div>
            </div>

            <!-- Add Event Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Event
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection