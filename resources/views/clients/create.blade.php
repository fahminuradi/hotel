@extends('layouts.index')


@section('content')
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-12 mt-6">
            <h2><i class="fa fa-user-plus"></i>Tambahkan Tamu</h2>
            <hr>

            @include('errors.errors')

            {{ Form::open(['url' => 'clients','files'=>true]) }}
            @include('clients._fields')
                <div class="form-group">
                    {{ Form::submit('Tambah', ['class'=>'btn btn-primary']) }}
                    <a href="/clients" class="btn btn-danger">Kembali</a>
                </div>
        </div>        
        </div>
        {!! Form::close() !!}
    </div>


@endsection
