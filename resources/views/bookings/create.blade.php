@extends('layouts.index')

@section('content')

    <div class="row">
        <div class="col-md-10">
        <div class="col-md-6 mt-3">
            <h2><i class="fa fa-calendar-plus-o"></i> Booking Kamar</h2>
            <hr>

            @include('errors.errors')

            {{ Form::open(['url' => ['booking']]) }}

            @include('bookings._fields')

            {{ Form::submit('pesan kamar', ['class'=>'btn btn-primary']) }}

            {!!  link_to('/booking','kembali',['class'=>'btn btn-danger'], $secure = null) !!}

            {{ Form::close() }}

        </div>
        </div>
    </div>

@endsection
