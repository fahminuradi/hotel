@extends('layouts.index')

@section('content')
<div class="row">
    <div class="col-md-15">
        <div class="col-md-10 mt-6">
    <h2><i class="fa fa-pencil"></i> Edit Kamar</h2>
    <hr>
        {!! Form::model($room, ['route' => ['room.update',$room->id], 'method'=>'PUT']) !!}
        @include('room.form')
        {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
        {!! link_to('/room', 'Back',['class'=>'btn btn-success']) !!}
    {!! Form::close() !!}
    </div>
</div>    
@endsection