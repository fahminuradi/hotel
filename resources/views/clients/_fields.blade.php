<div class="col-md-15">
<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
    {!! Form::label('Nama Lengkap') !!}
    {!! Form::text('nama', $client->nama, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
    <span class="text-danger">{{ $errors->has('nama') ? $errors->first('nama') : '' }}</span>
</div>

<div class="form-group {{ $errors->has('ktp') ? 'has-error' : '' }}">
    {!! Form::label('Nomor KTP') !!}
    {!! Form::text('ktp', $client->ktp, ['class' => 'form-control', 'placeholder' => 'Nomor KTP']) !!}
    <span class="text-danger">{{ $errors->has('ktp')  ? $errors->first('ktp') : ''}}</span>
</div>

<div class="form-group {{ $errors->has('telepon') ? 'has-error' : '' }}">
    {!! Form::label('Nomor Telepon') !!}
    {!! Form::text('telepon', $client->telepon, ['class' => 'form-control', 'placeholder' => 'Nomor Telepon']) !!}
    <span class="text-danger">{{ $errors->has('telepon')  ? $errors->first('telepon') : ''}}</span>
</div>

<div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
    {!! Form::label('Alamat') !!}
    {!! Form::textarea('alamat', $client->alamat,['class' => 'form-control', 'placeholder' => 'Alamat(sesuai KTP)']) !!}
    <span class="text-danger">{{ $errors->has('alamat') ? $errors->first('alamat') : '' }}</span>
</div>
</div>
