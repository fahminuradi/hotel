@extends('layouts.index')

@section('search')
    <form class="navbar-form navbar-left">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search In Clients">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
@endsection

@section('content')
<div class="col-md-12">
    <h2><i class="fa fa-bed"></i> Data Kamar</h2>
    <hr>
    @include('errors.errors')
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Gambar</th>
            <th>Nomor Kamar</th>
            <th>Lantai</th>
            <th>Kelas</th>
            <th>Tempat tidur</th>
            <th>Harga Sewa</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($rooms as $room)
            <tr>
                <td><img src="{{ url('/rooms').'/'. $room->image }}" width="30px" class="img-thumbnail"></td>
                <td>{{ $room->nomor }}</td>
                <td>{{ $room->lantai }}</td>
                <td>{{ $room->kelas }}</td>
                <td>{{ $room->kasur }}</td>
                <td>{{ $room->harga }}</td>
                <td>
                    @if ($room->status)
                        <span class="label label-warning">Tersedia</span>
                    @else
                        <span class="label label-danger">Terpesan</span>
                    @endif
                </td>
                <td>
                    {!! Form::open(['route'=>['room.destroy', $room->id], 'method'=>'DELETE']) !!}
                    {!! link_to_route('room.edit', '',[$room->id],['class'=>'fa fa-pencil btn btn-primary btn-sm']) !!}
                    {!! link_to_route('room.show', '',[$room->id],['class'=>'fa fa-bars btn btn-success btn-sm']) !!}
                    {{ Form::button('', ['type'=>'submit','class'=>'btn btn-danger btn-sm fa fa-trash','onclick'=>'return confirm("Yakin anda akan menghapus?")']) }}
                    {!! Form::close() !!}
                </td>
            </tr>
        </tbody>
       </div> 
        @endforeach
    </table>
@endsection
