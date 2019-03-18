@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="col-md-12">    
            <h2><i class="fa fa-user"></i> Tentang Tamu</h2>
            <hr>

            <h3><i class="fa fa-user-circle-o"></i>Data Diri</h3>
            </div>
            <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered mt-1">
                <tr>
                    <th>Nama</th>
                    <td>{{ $client->nama }}</td>
                </tr>

                <tr>
                    <th>Nomor KTP</th>
                    <td>{{ $client->ktp }}</td>
                </tr>

                <tr>
                    <th>Nomor Telepon</th>
                    <td>{{ $client->telepon }}</td> 
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>{{ $client->alamat }}</td>
                </tr>

                
            </table>
            {!! Form::open(['route'=> ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
            <a href="/clients" class="btn btn-success btn-sm">Kembali</a>
            {!! link_to_route('clients.edit', 'Ubah', [$client->id], ['class'=>'btn btn-info btn-sm']) !!}
            {{ Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm','onclick'=>'return confirm("Apakah yakin anda akan menghapus?")'] )  }}
            <hr>
            <h3><i class="fa fa-calendar"></i> Tentang Pemesanan</h3>
            </div>

            @if ($bookings)
                <table class="table table-hover table-striped table-bordered mt-1">
                    <thead>
                    <tr>
                        <th>Nomor Kamar</th>
                        <th>Checkin</th>
                        <th>Checkout</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td><a href="/room/{{ $booking->room->id }}">{{ $booking->room->nomor }}</a></td>
                            <td>{{ $booking->checkin }}</td>
                            <td>{{ $booking->checkout }}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                </div>
                {!! Form::close() !!}
        </div>
        @else
            <h2>{{ $client->name }} Tamu ini belum memesan hotel</h2>
        @endif
        </div>
@endsection
