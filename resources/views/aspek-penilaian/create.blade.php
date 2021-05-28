@extends('master.index')

@section('title', 'Tambah Aspek Penilaian')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Aspek Penilaian</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Aspek Penilaian</li>
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
                <h3 class="card-title">Tambah Aspek Penilaian</h3>
            </div>
            <form action="{{route('aspek-penilaian.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Penilaian</label>

                        <select name="kategori_id" class="form-control" id="kategori_id">
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategoris as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Uraian Aspek Penilaian</label>
                        <input type="text" class="form-control" name="aspek"  placeholder="Masukkan Uraian Aspek Penilaian">
                    </div>
                    
                </div>
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>

                    <button type="reset" class="btn btn-danger">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
