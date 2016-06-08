<!-- resources/views/events/create.blade.php -->
@extends('layouts.master')

@section('content')
<div id="new-event">

   <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
    </div>

    <!-- PAGE HEADER -->
    <div class="row">
        <div class="center-block">
            <h3>Let's create an Event!</h3>
        </div>
    </div>

    <!-- New Event Form -->
    <form action="{{ url('volunteerevent') }}" method="POST" class="form-horizontal">
        {!! csrf_field() !!}

        <!-- EVENT NAME-->
        <div class="form-group">
            <label for="location" class="col-sm-3 control-label">Event Name</label>

            <div class="col-sm-6">
                <input type="text" name="title" id="event-title" class="form-control">
            </div>
        </div>

        <!-- DESCRIPTION-->
        <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Description</label>

            <div class="col-sm-6">
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
        </div>


        <!-- START DATE-->
        <div class="form-group">
            <label for="start_date" class="col-sm-3 control-label">Start Date</label>

            <div class="col-sm-3">
                <input type="text" name="start_date" id="datepicker1" class="form-control">
            </div>
        </div>

        <!-- END DATE-->
        <div class="form-group">
            <label for="end_date" class="col-sm-3 control-label">End Date</label>

            <div class="col-sm-3">
                <input type="text" name="end_date" id="datepicker2" class="form-control">
            </div>
        </div>

        <hr>

        <!-- LOCATION-->
        <div class="form-group">
            <label for="location" class="col-sm-3 control-label">Event Location</label>

            <div class="col-sm-6">
                <input type="text" name="location" id="location" class="form-control">
            </div>
        </div>

        <!-- STREET-->
        <div class="form-group">
            <label for="street" class="col-sm-3 control-label">Street</label>

            <div class="col-sm-6">
                <input type="text" name="street" id="street" class="form-control">
            </div>
        </div>

        <!-- CITY-->
        <div class="form-group">
            <label for="city" class="col-sm-3 control-label">City</label>

            <div class="col-sm-6">
                <input type="text" name="city" id="city" class="form-control">
            </div>
        </div>

        <!-- STATE-->
        <div class="form-group">
            <label for="state" class="col-sm-3 control-label">State</label>

            <div class="col-sm-6">
                <input type="text" name="state" id="state" class="form-control">
            </div>
        </div>
        
        <!-- ZIP-->
        <div class="form-group">
            <label for="zip" class="col-sm-3 control-label">Zip</label>

            <div class="col-sm-6">
                <input type="text" name="zip" id="zip" class="form-control">
            </div>
        </div>

        <!-- COUNTRY-->
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Country</label>

            <div class="col-sm-6">
                <input type="text" name="country" id="country" class="form-control">
            </div>
        </div>

        <!-- BUTTON: SAVE-->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-2">
                <button type="submit" class="btn btn-primary">
                    Add Event
                </button>
            </div>
            <!-- BUTTON: CANCEL -->
            <div class='cancel' >
                <a href=" {{route('volunteerevent.index')}}">Cancel</a>
            </div>
        </div>

    </form>

</div>

@endsection