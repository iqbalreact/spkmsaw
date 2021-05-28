@extends('master.index')

@section('title', 'Edit Kriteria')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Kriteria</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Kriteria</li>
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
                <h3 class="card-title">Edit Kriteria</h3>
            </div>
            <form action="{{route('kriteria.update', $kriteria->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kriteria</label>
                        <input type="text" class="form-control" value="{{$kriteria->nama_kriteria}}" name="nama_kriteria"  placeholder="Masukkan Nama Kriteria">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bobot Kriteria</label>
                        <input type="number" class="form-control" value="{{$kriteria->bobot_kriteria}}" name="bobot_kriteria"  placeholder="Masukkan Bobot Kriteria">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Atribut Kriteria</label>
                        <select name="atribut_kriteria" id="" class="form-control">
                            <option value="">Pilih</option>
                            <option value="benefit">Benefit</option>
                            <option value="cost">Cost</option>
                        </select>
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
