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
            <form action="{{route('nilai-alternatif.update', $id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Alternatif</label>
                        <input type="text" readonly class="form-control" value="{{Alternatif($id)}}">
                        <input type="hidden" name="alternatif" class="form-control" value="{{$id}}">
                    </div>
                    @foreach ($kriterias as $kriteria)
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{$kriteria->nama_kriteria}}</label>
                        <select name="subkriteria_id[]" class="form-control" id="">
                            <option value="">Pilih</option>
                            @foreach (getSubkriteria($kriteria->id) as $item)
                            <option value="{{$item->id}}">{{$item->nama_subkriteria}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endforeach
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
