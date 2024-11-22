@extends('layouts.backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-center">
        <div class="card-md-8">
            <div class="card">
                <div class="card-header">Data Berita Fakultas
                    <a href="{{route('pengumuman.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Judul Berita Fakultas</label>
                        <b>{{$beritaF->judul_beritaF}}</b>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <label for="">Deskripsi</label>
                        <p>{!!$beritaF->deskripsiF!!}</p>
                    </div>
                    <div class="mb-2">
                        <label for="">Status</label>
                        <b>{{$beritaF->flag == 0 ? 'DRAF':'PUBLISHED' }}</b>
                    </div>
                    <hr>
                    <div class="mb-2">
                        <img src="{{ asset('/images/beritaF/' . $beritaF->foto) }}" alt="" style="width: 200px">
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
