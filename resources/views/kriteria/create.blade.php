@extends('master.index')

@section('title', 'Tambah Kriteria')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Kriteria</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Kriteria</li>
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
                <h3 class="card-title">Tambah Kriteria</h3>
            </div>
            <form action="{{route('kriteria.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kriteria</label>
                        <input type="text" class="form-control" name="nama_kriteria"  placeholder="Masukkan Nama Kriteria">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bobot Kriteria</label>
                        <input type="number" class="form-control" name="bobot_kriteria"  placeholder="Masukkan Bobot Kriteria">
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
                    <button type="submit" class="btn btn-xs btn-primary">Tambah</button>

                    <button type="reset" class="btn btn-xs btn-danger">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
