@extends('layouts.index')

@section('content')


    <div class="col-md-12">
    <h2><i class="fa fa-info"></i> Detail Kamar</h2>
    <hr>

    <table class="table table-bordered table-striped">


        <tr>
                    <th>Nomor Kamar</th>
                    <td>{{ $room->nomor }}</td>
                    <td rowspan="6"><img src="{{ asset('rooms/'.$room->image) }}" alt=""
                                         class="img img-responsive"
                                         style="width: 350px; margin: 30px auto;"></td>
                </tr>

                <tr>
                    <th>Lantai</th>
                    <td>{{ $room->lantai }}</td> 
                </tr>

                <tr>
                    <th>Kelas</th>
                    <td>{{ $room->kelas }}</td>
                </tr>

                <tr>
                    <th>Kasur</th>
                    <td>{{ $room->kasur }}</td>
                </tr>

                <tr>
                    <th>Harga Sewa</th>
                    <td>{{ $room->harga }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                    @if ($room->status)
                        <span>Tersedia</span>
                    @else
                        <span>Terpesan</span>
                    @endif
                </td>
                </tr>

    

        <!-- <tr>
            <th>Registered At</th>
            <td>{{ $room->created_at->diffForHumans() }}</td>
        </tr>

        <tr>
            <th>Last update</th>
            <td>{{ $room->updated_at->diffForHumans() }}</td>
        </tr> -->

    </table>

    {!! Form::open(['route'=> ['room.destroy', $room->id], 'method'=>'DELETE']) !!}
        {!! link_to('/room', 'kembali',['class'=>'btn btn-success btn-sm']) !!}
    {!! link_to_route('room.edit', 'ubah', $room->id, ['class'=>'btn btn-info btn-sm']) !!}
    {!! Form::button('hapus',['type','submit','class'=>'btn btn-danger btn-sm', 'onclick'=>'return confirm("apakah anda yakin akan menghapus?")']) !!}
    {!! Form::close() !!}
    </div>
@endsection