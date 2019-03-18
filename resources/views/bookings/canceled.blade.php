@extends('layouts.app')

@section('search')
    <form class="navbar-form navbar-left">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search Canceled Bookings">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
@endsection

@section('content')
    <h2><i class="fa fa-calendar"></i> View Bookings</h2>
    <hr>

    @include('errors.errors')
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>#Booking ID</th>
            <th>Client Name</th>
            <th>Room</th>
            <th>Floor</th>
            <th>Beds</th>
            <th>Type</th>
            <th>Booked At</th>
            <th>Booking End</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($canceledBookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td><a href="/clients/{{ $booking->client->id }}">{{ $booking->client->nama }}</a></td>
                <td>{{ $booking->room->nomor }}</td>
                <td>{{ $booking->room->lantai }}</td>
                <td>{{ $booking->room->kasur }}</td>
                <td>{{ $booking->room->kelas }}</td>
                <td>{{ $booking->checkin }}</td>
                <td>{{ $booking->checkout }}</td>
                <td>
                    @if ($booking->status)
                        <label class="label label-primary text-xs">Terpesan <i class="fa fa-check"></i></label>
                    @else
                        <label class="label label-warning text-xs">Dibatalkan <i class="fa fa-ban"></i></label>
                    @endif
                </td>
                <td>
                    <div class="input-group">
                        {!! Form::open(['route'=>['booking.destroy', $booking->id], 'method'=>'DELETE',]) !!}
                        {!! link_to_route('booking.edit','',[$booking->id],['class'=>'fa fa-pencil btn btn-primary btn-xs','title' => 'Edit Booking']) !!}
                        {!! link_to_route('booking.show', '',[$booking->id],['class'=>'fa fa-bars btn btn-success btn-xs','title' => 'Show Booking Details']) !!}
                        {{ Form::button('', ['type'=>'submit','class'=>'btn btn-danger btn-xs fa fa-trash','onclick'=>'return confirm("Are you sure you want to delete this?")','title' => 'Delete Booking']) }}
                        {!! Form::close() !!}


                    </div>

                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection