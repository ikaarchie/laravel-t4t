@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">

            <h1>Tambah Data Pegawai</h1>

            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/store') }}" method="GET">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nim">No. Telpon</label>
                            <input type="number" name="no_telp" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Tambah Pegawai</button>
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