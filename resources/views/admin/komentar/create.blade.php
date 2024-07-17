@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        <h4 class="card-title">Tabel Komentar</h4>
                    </div>
                    <div class="float-end">
                        <a href="{{route('komentar.index')}}" class="btn btn-sm btn-primary">
                            Kembali
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('komentar.store')}} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label">Komentar</label>
                            <input type="text" class="form-control @error('komentar') is-invalid @enderror" name="komentar" required>
                            @error('komentar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Nama Pengguna</label>
                            <select type="text" class="form-control" name="id_user">
                                @foreach ($users as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection