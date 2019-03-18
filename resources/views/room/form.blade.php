<div class="col-md-10">
<div class="form-group {{ $errors->has('nomor') ? 'has-error' : '' }}">
    {!! Form::label('nomor','Nomor Kamar:') !!}
    {!! Form::text('nomor',$room->nomor,['class'=>'form-control', 'placeholder' => 'masukan nomor kamar']) !!}
    <span class="text-danger">{{ $errors->has('nomor') ? $errors->first('nomor') : ''  }}</span>
</div>

<div class="form-group {{ $errors->has('lantai') ? 'has-error' : '' }}">
    {!! Form::label('lantai','Lantai:') !!}
    {!! Form::select('lantai', ['Lantai Pertama' => 'Lantai Pertama', 'Lantai Kedua' => 'Lantai Kedua', 'Lantai Ketiga'=>'Lantai Ketiga', 'Lantai Keempat'=>'Lantai Keempat'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Pilih Lantai']) !!}
    <span class="text-danger">{{ $errors->has('lantai') ? $errors->first('nomor') : ''  }}</span>
</div>

<div class="form-group {{ $errors->has('kelas') ? 'has-error' : '' }}">
    {!! Form::label('kelas','Kelas:') !!}
    {!! Form::select('kelas', ['Standard' => 'Standard', 'Deluxe' => 'Deluxe', 'Family Room'=>'Family Room'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Pilih Kelas Kamar']) !!}
    <span class="text-danger">{{ $errors->has('kelas') ? $errors->first('nomor') : ''  }}</span>
</div>

<div class="form-group {{ $errors->has('kasur') ? 'has-error' : '' }}">
    {!! Form::label('kasur','Kasur:') !!}
    {!! Form::select('kasur', ['Satu Kasur' => 'Satu Kasur', 'Dua Kasur' => 'Dua Kasur', 'Tiga Kasur'=>'Tiga Kasur'],null,['class'=>'form-control selectpicker', 'data-live-search'=>'true', 'title'=>'Pilih Kelas Kamar']) !!}
    <span class="text-danger">{{ $errors->has('kasur') ? $errors->first('nomor') : ''  }}</span>
</div>
</div>