@extends('master.index')

@section('title', 'SPK Smartphone - Proses Rekomendasi')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Proses Rekomendasi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Proses Rekomendasi</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    
@endsection

@section('content')


<div class="row">

    <div class="col-12">
        <div class="card" style="text-align: center">
          <div class="card-header">
            <h3 class="card-title">Klik tombol proses untuk mendapatkan hasil rekomendasi smartphone</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">   
            
            <a href="{{route('perhitungan')}}">
                <button class="btn btn-primary">Proses Hasil Rekomendasi</button>
            </a>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- /.card -->
    </div>

</div>
    
@endsection