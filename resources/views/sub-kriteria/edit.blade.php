@extends('master.index')

@section('title', 'Edit Sub Kriteria')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Sub Kriteria</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Sub Kriteria</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    
@endsection

@section('content')

<div class="row">

    
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Sub Kriteria</h3>
            </div>
            <form action="{{route('sub-kriteria.update', $subkriteria->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kriteria</label>
                        <input type="text" class="form-control" value="{{Kriteria($subkriteria->kriteria_id)}}" name="kriteria_id"  placeholder="Masukkan Nama Kriteria" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kriteria</label>
                        <input type="text" class="form-control" value="{{$subkriteria->nama_subkriteria}}" name="nama_subkriteria"  placeholder="Masukkan Nama Sub Kriteria">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bobot Kriteria</label>
                        <input type="number" class="form-control" value="{{$subkriteria->bobot_subkriteria}}" name="bobot_subkriteria"  placeholder="Masukkan Bobot Sub Kriteria">
                    </div>
                    
                </div>
                       
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-xs">Perbaharui</button>
                    <button type="reset" class="btn btn-danger btn-xs">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
