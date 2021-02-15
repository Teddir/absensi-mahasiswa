@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Absensi</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ url('/absensis.create') }}"> Create Absensis</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
        
            <th width="20px" class="text-center">Id</th>
            <th>Waktu Absen</th>
            <th>Mahasiswa Id</th>
            <th>Matakuliah Id</th>
            <th>Keterangan</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($absensis as $post)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $post->waktu_absen}}</td>
            <td>{{ $post->mahasiswa_id }}</td>
            <td>{{ $post->matakuliah_id }}</td>
            <td>{{ $post->keterangan }}</td>
            <td class="text-center">
                <form action="{{ url('absensis.destroy',$post->id) }}" method="POST">
 
            <a class="btn btn-info btn-sm" href="{{ url('absensis.show',$post->id) }}">Absen Disini</a>

            <a class="btn btn-primary btn-sm" href="{{ url('absensis.edit',$post->id) }}">Edit Absen</a>

                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $absensis->links() !!}
 
@endsection