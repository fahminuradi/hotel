@extends('layouts.index')

@section('content')


    <div class="col-md-12">
    <h2><i class="fa fa-info"></i> Info Pemesanan </h2>
    <hr>
    </div>
    <div class="col-md-10">
    <table class="table table-bordered table-striped">

        <tr>
            <th>Client Name</th>
            <td>{{ $booking->client->nama }}</td>
        </tr>

        <tr>
            <th>Nomor Kamar</th>
            <td>{{ $booking->room->id }}</td>
        </tr>

        <tr>
            <th>Lantai</th>
            <td>{{ $booking->room->lantai }}</td>
        </tr>

        <tr>
            <th>Kelas</th>
            <td>{{ $booking->room->kelas }}</td>
        </tr>

        <tr>
            <th>Checkin</th>
            <td>{{ $booking->checkin }}</td>
        </tr>

        <tr>
            <th>Checkout</th>
            <td>{{ $booking->checkout }}</td>
        </tr>

    </table>

    </div>
@endsection