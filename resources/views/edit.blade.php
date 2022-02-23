@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            
            <h1>Edit Data Pegawai</h1>

            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/update/'.$data->id) }}" method="GET">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Edit Data Pegawai</label>
                            <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" >{{ $data->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="nim">No. Telpon</label>
                            <input type="number" name="no_telp" class="form-control"  value="{{ $data->no_telp }}">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Edit Pegawai</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href="{{ url('/') }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>    
@endsection