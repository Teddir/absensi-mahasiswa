@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Data Absensi</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ url('/absensis') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Absen:</strong>
                {{ $absensi[0]->waktu_absen }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mahasiswa Id:</strong>
                {{ $absensi[0]->mahasiswa_id }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Matakuliah Id:</strong>
                {{ $absensi[0]->matakuliah_id }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                {{ $absensi[0]->keterangan }}
            </div>
        </div>
    </div>
@endsection