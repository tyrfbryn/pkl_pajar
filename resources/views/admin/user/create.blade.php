@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-start">
                                    <h4 class="card-title">Basic Datatable</h4>
                                </div>
                                <div class="float-end">
                                    <a href="{{route('user.index')}}" class="btn btn-sm btn-primary">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control @error('user') is-invalid @enderror" name="name" 
                                        placeholder="username" required> 
                                        @error('user')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror    
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control" @error('email') is-invalid @enderror name="email"
                                        placeholder="email" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" @error('password') is-invalid @enderror name="password"
                                        rows="3" placeholder="password" required></input>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                    <label class="form-label">Select Role</label>
                                    <select class="form-control" name="isAdmin" id="isAdmin" required>
                                        <option value="0" {{old('isAdmin')==0 ? 'selected' : ''}}>User</option>
                                        <option value="1" {{old('isAdmin')==1 ? 'selected' : ''}}>Admin</option>
                                    </select>
                                    </div>
                                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
@endsection