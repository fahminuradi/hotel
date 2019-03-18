@extends('layouts.index')

@section('search')
    <form class="navbar-form navbar-left">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search In Bookings">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
@endsection

@section('content')
<div class="col-md-12">
    <h2><i class="fa fa-calendar"></i> Data Pemesan</h2>
    <hr>

    @include('errors.errors')
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nama Pemesan</th>
            <th>Nomor Kamar</th>
            <th>Lantai</th>
            <th>Kasur</th>
            <th>Kelas</th>
            <th>tanggal Checkin</th>
            <th>Tanggal Checkout</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bookings as $booking)
            <tr>
                <td><a href="clients/{{ $booking->client->id }}">{{ $booking->client->nama }}</a></td>
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
                        {!! link_to_route('booking.show', '',[$booking->id],['class'=>'fa fa-bars btn btn-success btn-xs','title' => 'Lihat detail']) !!}
                        {{ Form::button('', ['type'=>'submit','class'=>'btn btn-danger btn-xs fa fa-trash','onclick'=>'return confirm("apakah yakin anda kan menghapus pemesanan ini?")','title' => 'hapus pemesanan']) }}
                        {!! Form::close() !!}

                        {!! Form::open(['route'=>['booking.cancel', $booking->id, $booking->room_id]]) !!}
                        {{ Form::button('', ['type'=>'submit','class'=>'btn btn-warning btn-xs fa fa-times-circle col-md-12','onclick'=>'return confirm("Apakah anda yakin akan membatalkan pemesanan?")', 'title' => 'batalkan pemesanan', 'style' => 'margin-top: 5px']) }}
                        {!! Form::close() !!}

                    </div>

                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>    
@endsection