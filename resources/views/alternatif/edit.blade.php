@extends('master.index')

@section('title', 'Edit Alternatif')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Alternatif</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Alternatif</li>
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
                <h3 class="card-title">Edit Alternatif</h3>
            </div>
            <form action="{{route('alternatif.update', $alternatif->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Alternatif</label>
                        <input type="text" class="form-control" value="{{$alternatif->nama_alternatif}}" name="nama_alternatif"  placeholder="Masukkan Nama Alternatif">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Harga</label>
                        <input type="text" class="form-control" value="{{$alternatif->harga}}" name="harga"  placeholder="Masukkan Nama Alternatif">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>

                        <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10">
                            {{$alternatif->deskripsi}}
                        </textarea>

                        {{-- <input type="text" class="form-control" value="{{$alternatif->deskripsi}}" name="deskripsi"  placeholder="Masukkan Deskripsi"> --}}
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
