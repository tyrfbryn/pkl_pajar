@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        <h4 class="card-title">Tabel artikel</h4>
                    </div>
                    <div class="float-end">
                        <a href="{{route('artikel.index')}}" class="btn btn-sm btn-primary">
                            Kembali
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('artikel.update',$artikel->id)}} " method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" required>
                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Isi</label>
                            <input type="text" class="form-control @error('isi') is-invalid @enderror" name="isi" required>
                            @error('isi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Publikasi</label>
                            <input type="date" class="form-control @error('tgl_publikasi') is-invalid @enderror" name="tgl_publikasi" required>
                            @error('tgl_publikasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Penulis</label>
                            <select type="text" class="form-control" name="id_user">
                                @foreach ($users as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select type="text" class="form-control" name="id_kategori">
                                @foreach ($kategori as $data)
                                    <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Komentar</label>
                            <select type="text" class="form-control" name="id_komentar">
                                @foreach ($komentar as $data)
                                    <option value="{{$data->id}}">{{$data->komentar}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cover</label>
                            <input type="file" class="form-control" name="cover">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection