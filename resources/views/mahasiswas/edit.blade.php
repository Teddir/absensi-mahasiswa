@extends('template')
    
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Mahasiswa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ url('/') }}"> Back</a>
            </div>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops</strong> Anda salah menginputkan data mahasiswa.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="{{ url('mahasiswas.update',$mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
 
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Nama Mahasiswa:</strong>
                <input type="string" name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Alamat:</strong>
                <input type="string" name="alamat" class="form-control" placeholder="Alamat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>No Telepon:</strong>
                <input type="string" name="no_tlp" class="form-control" placeholder="No Telepon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Email</strong>
                <input type="string" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
 
    </form>
@endsection