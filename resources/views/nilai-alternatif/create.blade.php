@extends('master.index')

@section('title', 'Tambah Nilai Alternatif')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Nilai Alternatif</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Nilai Alternatif</li>
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
                <h3 class="card-title">Tambah Nilai Alternatif</h3>
            </div>
            <form action="{{route('nilai-alternatif.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Smartphone</label>
                        <select name="alternatif_id" id="" class="form-control">
                            <option value="">Pilih</option>
                            @foreach ($alternatifs as $alternatif)
                            <option value="{{$alternatif->id}}">{{$alternatif->nama_alternatif}} (Rp. {{format_uang($alternatif->harga)}})</option>
                            @endforeach
                        </select>
                    </div>

                    @foreach ($kriterias as $kriteria)
                    <div class="form-group">
                        @if ($kriteria->nama_kriteria == 'Harga')
                        <label for="exampleInputEmail1">Rentang Harga</label>
                        @else
                        <label for="exampleInputEmail1">{{$kriteria->nama_kriteria}}</label>
                        @endif
                        <select name="subkriteria_id[]" class="form-control" id="">
                            <option value="">Pilih</option>
                            @foreach (getSubkriteria($kriteria->id) as $item)
                            {{-- @if ($kriteria->nama_kriteria == 'Harga')
                            <option value="{{$item->id}}">(Rp. {{format_uang($item->nama_subkriteria)}})</option>
                            @endif --}}
                            <option value="{{$item->id}}">{{$item->nama_subkriteria}}</option>
                            @endforeach
                        </select>

                    </div>
                    @endforeach
                </div>
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-xs btn-primary">Tambah</button>

                    <button type="reset" class="btn btn-xs btn-danger">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>

    


</script>
    
@endsection
