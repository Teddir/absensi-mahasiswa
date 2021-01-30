@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Data Absensi</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('absensis.index') }}"> Back</a>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Absen:</strong>
                {{ $post->waktu_absen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mahasiswa Id:</strong>
                {{ $post->mahasiswa_id }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Matakuliah Id:</strong>
                {{ $post->matakuliah_id }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                {{ $post->keterangan }}
            </div>
        </div>
    </div>
@endsection