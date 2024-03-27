@extends('layout.app')

@section('subtitle','Kategori')
@section('content_header_title','Kategori')
@section('content_header_subtitle','Update')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Kategori Baru </h3>
            </div>
            <form action="/kategori/update/store/{{$data->kategori_id}}" method="post">
                <div class="card-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" class="form-control" id="kodeKategori" name="kategori_kode" placeholder="Kode Kategori" value="{{$data->kategori_kode}}">
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Kode Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="kategori_nama" placeholder="Nama Kategori" value="{{$data->kategori_nama}}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
                    
@endsection