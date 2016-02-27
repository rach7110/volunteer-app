<!-- resources/views/volutneerevetns/index.blade.php -->

@extends('layouts.master')

@section('content')

    <!-- CURRENT VOLUNTEER EVENTS  -->
    @if(count($volunteer_events) > 0)
        <div class="panel panel-default">

            <div class="panel-heading">
                Here are your events:
            </div>

            <div class="panel-body">
                <table class="table task-table">

                    <!-- TABLE HEADINGS -->
                    <thead>
                        <th>Event Name</th>
                    </thead>
                    <!-- TABLE BODY -->
                    <tbody>
                        @foreach($volunteer_events as $event)
                            <tr>
                                <!-- EVENT NAME -->
                                <td class="table-text">
                                    <div>{{ $event->title }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    @endif

@endsection
