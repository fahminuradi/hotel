@extends('layouts.index')

@section('content')
<div class="col-md-12">
    <h1><i class="fa fa-edit"></i> Edit Tamu</h1>
    <div class="row">
        <div class="col-md-10 mt-6">

            @include('errors.errors')

            {!! Form::model($client, ['route' => ['clients.update', $client->id],'method'=>'PUT', 'files'=>true]) !!}

            @include('clients._fields')
            <div class="form-group">
                {!! Form::submit('Ubah', ['class'=>'btn btn-primary']) !!}
                <a href="/clients" class="btn btn-success">Kembali</a>
            </div>

            {!! Form::close() !!}

        </div>
        </div>
    </div>
@endsection