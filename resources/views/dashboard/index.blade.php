@extends('master.index')

@section('title', 'SPK Smartphone - Dashboard')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    
@endsection

@section('content')
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-mobile"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total Smartphone</span>
        <span class="info-box-number">
          {{count($alternatifs)}}
          {{-- <small>%</small> --}}
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-basket"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total Kriteria</span>
        <span class="info-box-number">{{count($kriteria)}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-share-alt-square"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total Subkriteria</span>
        <span class="info-box-number">{{count($sub)}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Total Pengguna</span>
        <span class="info-box-number">{{count($pengguna)}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>

<div class="row">

    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Sistem Rekomendasi Pemilihan Smartphone</h3>

            {{-- <div class="float-sm-right">
                <a href="{{route('pegawai.create')}}">
                    <button type="button" class="btn btn-success btn-block btn-sm"><i class="fa fa-plus"></i> Tambah Pegawai</button>
                </a>
            </div> --}}

          </div>
          <!-- /.card-header -->
          <div class="card-body">   
            <p>
                Selamat Datang di Aplikasi Sistem Rekomendasi Pemilihan Smartphone Menggunakan Metode SAW dan WP
            </p>

            <P>Cara Penggunaan Aplikasi</P>
            <article>
              <ol type="1">
                <li>Masukan smartphone pilihan anda melalui menu <b><a href="/admin/alternatif">Data Alternatif</a> </b></li>
                <li>Pilih Tambah Alternatif</li>
                <li>Pilih lengkapi form Alternatif</li>
                <li>Kemudian Simpan</li>
                <li>Lengkapi data smartphone yang telah anda tambahkan melalui menu <b><a href="/admin/nilai-alternatif">Nilai Alternatif</a> </b></li>
                <li>Pilih Tambah Nilai Alternatif</li>
                <li>Lengkapi form nilai dari smartphone yang dipilih</li>
                <li>Kemudian Simpan</li>
                <li>Klik Proses Rekomendasi</li>
                <li>Sistem Akan Menampilkan Hasil Rekomendasi</li>
              </ol>
            </article>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- /.card -->
    </div>

</div>
    
@endsection