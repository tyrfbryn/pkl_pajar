@extends('layouts.admin')
@section('content')
<div class="container">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-start">
                                    <h4 class="card-title">Basic Datatable</h4>
                                </div>
                                <div class="float-end">
                                    <a href="{{route('kategori.create')}}" class="btn btn-sm btn-primary">
                                        Tambah
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table header-border table-hover verticle-middle" id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Categories</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @php $i=1; @endphp
                                            @foreach ($kategori as $data)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$data->nama_kategori}}</td>
                                                <td>
                                                    <form action="{{route('kategori.destroy',$data->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{route('kategori.edit',$data->id)}}" class="btn btn-sm btn-warning">
                                                            Ubah
                                                        </a>
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>   
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection