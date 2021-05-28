@extends('master.index')

@section('title', 'Tambah Sub Kriteria')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Sub Kriteria</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Sub Kriteria</li>
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
                <h3 class="card-title">Tambah Sub Kriteria</h3>
            </div>
            <form action="{{route('sub-kriteria.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pilih Kriteria</label>
                        <select name="kriteria_id" id="" class="form-control">
                            <option value="">Pilih</option>
                            @foreach ($kriterias as $kriteria)
                            <option value="{{$kriteria->id}}">{{$kriteria->nama_kriteria}}</option>
                            @endforeach
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Sub Kriteria</label>
                        <input type="text" class="form-control" name="nama_subkriteria"  placeholder="Masukkan Nama Kriteria">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bobot Sub Kriteria</label>
                        <input type="number" class="form-control" name="bobot_subkriteria"  placeholder="Masukkan Bobot Kriteria">
                    </div> 
                    
                    
                </div>
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-xs btn-primary">Tambah</button>

                    <button type="reset" class="btn btn-xs btn-danger">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
