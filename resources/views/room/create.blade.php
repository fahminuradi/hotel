@extends('layouts.index')


@section('content')
    <div class="row">
        <div class="col-md-15">
        <div class="col-md-10 mt-6">
            <h2><i class="fa fa-hotel"></i>Tambahkan Kamar</h2>
            <hr>    

            @include('errors.errors')

            {{ Form::open(['url' => 'room','files'=>true]) }}
            @include('room._fields')
            <div class="col-md-10">
                <div class="form-group">
                    {{ Form::submit('Tambahkan kamar', ['class'=>'btn btn-primary']) }}
                    <a href="/room" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>


@endsection
