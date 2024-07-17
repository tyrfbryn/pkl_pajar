@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        <h4 class="card-title">Basic Datatable</h4>
                    </div>
                    <div class="float-end">
                        <a href="{{route('kategori.index')}}" class="btn btn-sm btn-primary">
                            Kembali
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('kategori.update',$kategori->id)}} " method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">Kategori</label>
                            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" 
                            value="{{ old('kategori', $kategori->nama_kategori) }}" required>
                            @error('kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection