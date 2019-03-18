<div class="col-md-15">
<div class="form-group">
    {!! Form::label('name','Cari nama tamu dibawah ini') !!} jika tidak ada tambahkan <a href="{{route('clients.create')}}">disini</a>
    <select class="selectpicker form-control" data-live-search="true" title="" name="client_id">
        @foreach ($clients as $client)
            <option data-subtext="{{ $client->name }}" value="{{ $client->id }}">{{ $client->nama }}</option> J
        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('room','Room:') !!}
    <select class="selectpicker form-control" data-live-search="true"
            title="" name="room_id">
        @foreach ($rooms as $room)
            <option data-subtext="{{ $room->name }}" value="{{ $room->id }}">Nomor Kamar:{{ $room->nomor }}</option>
        @endforeach
    </select>
</div>      
<div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
    {!! Form::label('checkin','Checkin:') !!}
    {!! Form::date('checkin', $booking->checkin ,['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('checkin') ? $errors->first('checkin') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('end_date') ? 'has-error' : '' }}">
    {!! Form::label('checkout','Checkout') !!}
    {!! Form::date('checkout', $booking->checkout ,['class'=>'form-control datepicker']) !!}
    <span class="text-danger">{{ $errors->has('checkout') ? $errors->first('checkout') : '' }}</span>
</div>
</div>