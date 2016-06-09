<!-- resources/views/volutneerevetns/index.blade.php -->

@extends('layouts.master')

@section('content')
    <!-- ADD EVENT BUTTON -->
<!--     <button type='button' class='btn btn-new-event pull-right'>
        <img src='images/add.png'> Event
    </button> -->

    <div class='btn btn-new-event pull-right'>
        <a class='btn' href=" {{route('volunteerevent.create')}}"><img src='images/add.png'> Event</a>
    </div>

    <!-- CURRENT VOLUNTEER EVENTS  -->
    @if(count($volunteer_events) > 0)
        <div id="event-table" class="panel panel-default">

            <div class="panel-heading">
                Your Volunteer Events:
            </div>

            <div  class="panel-body">
                <table class="table task-table">

                    <!-- TABLE HEADINGS -->
                    <thead>
                        <th>Date</th>
                        <th>Event Name</th>
                        <th>Description</th>

                    </thead>
                    <!-- TABLE BODY -->
                    <tbody>
                        @foreach($volunteer_events as $event)
                            <tr>
                                <!-- EVENT DATE -->
                                <td class="table-text">
                                    <div>{{ $event->start_date }}</div>
                                </td>  
                                <!-- EVENT NAME -->
                                <td class="table-text">
                                    <div>{{ $event->title }}</div>
                                </td>                               
                                <!-- DESCRIPTION -->
                                <td class="table-text">
                                    <div>{{ $event->description }}</div>
                                </td>

                                <td>
                                <div class='btn btn-default pull-right'>
                                    <a class='btn' href=" {{ route('volunteerevent.show', [$event->id]) }}">View Event</a>
                                
                                </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    @endif

@endsection
