@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Data Matakuliah</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ url('/matakuliahs') }}"> Back</a>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Matakuliah:</strong>
                {{ $matakuliah->nama_matakuliah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SKS:</strong>
                {{ $matakuliah->sks }}
            </div>
    </div>
@endsection