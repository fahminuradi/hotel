@extends('layouts.index')

@section('search')
    <form class="navbar-form navbar-left">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search In Clients">
        </div>
        <button type="submit" class="btn btn-default">Cari Nama Client</button>
    </form>
@endsection

@section('content')
<div class="col-md-12">
    <h2><i class="fa fa-users"></i> Daftar Tamu</h2>
    <hr>
    <a href="/clients/create" class="btn btn-primary"><i class="fa fa-user-plus"></i></a>
    <br><br>
</div>
    @include('errors.errors')
<div class="col-sm-10">
    <table class="table table-bordered table-hover" id="clients">
        <thead>
        <tr>
            <th>Nama</th>
            <th>Nomor KTP</th>
            <th>Telepon</th>
            <th>Alamat/Kota Asal</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->nama }}</td>
                    <td>{{ $client->ktp }}</td>
                    <td>{{ $client->telepon }}</td>
                    <td>{{ $client->alamat }}</td>
                    <td>
                    {!! Form::open(['route'=> ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
                    {!! link_to_route('clients.edit', '', [$client->id], ['class'=>'btn btn-primary btn-sm fa fa-pencil']) !!}
                    {!! link_to_route('clients.show','',[$client->id], ['class'=>'btn btn-success btn-sm fa fa-bars'])  !!}
                    {{ Form::button('<span class="fa fa-trash"></span>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick'=>'return confirm("apakah yakin anda akan menghapus?")'] )  }}
                    {!! Form::close() !!}
                </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>    
@endsection