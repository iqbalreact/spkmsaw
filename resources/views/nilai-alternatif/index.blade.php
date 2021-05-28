@extends('master.index')

@section('title', 'Data Nilai Alternatif')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Daftar Nilai Alternatif</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Nilai Alternatif</li>
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
            <h3 class="card-title">Sistem Rekomendasi Pemilihan Smartphone Menggunakan SAW dan WP</h3>

            <div class="float-sm-right">
                <a href="{{route('nilai-alternatif.create')}}">
                    <button type="button" class="btn btn-success btn-block btn-sm"><i class="fa fa-plus"></i> Tambah Nilai Alternatif</button>
                </a>
            </div>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th style="width: 20%">Nama Alternatif</th>
                @foreach ($kriterias as $item)
                <th>{{$item->nama_kriteria}}</th>
                @endforeach
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>

                @foreach ($nilai as $alternatif => $sub)
                {{-- {{dd($sub)}} --}}
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{Alternatif($alternatif)}}</td>
                  @foreach ($sub as $d)
                  
                  <td>{{Subkriteria($d->subkriteria_id)}}</td>
                  @endforeach
                  <td align="center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      {{-- <a href="{{route('nilai-alternatif.edit', $alternatif)}}">
                        <button type="button" class="btn btn-warning btn-xs">Edit</button>
                      </a> &nbsp; --}}
                      <form action="{{route('nilai-alternatif.destroy', $alternatif)}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
                      </form>
                    </div>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- /.card -->
    </div>

    <div class="col-12">
      <div class="card" style="text-align: center">
        <div class="card-body">

          @php
              $data = count($nilai);
          @endphp

          @if ($data == 0)
              {{-- <p>Tidak Ada Data Untuk Di Proses !</p> --}}
              {{-- <h5>Klik Tombol Dibawah Untuk Mendapatkan Hasil Rekomendasi !</h5>    --}}
              <a href="#" title="Data Tidak Ditemukan">
                  <button class="btn btn-primary" disabled>Tidak Ada Data Untuk Di Proses !</button>
              </a>
          @else
            <h5>Klik Tombol Dibawah Untuk Mendapatkan Hasil Rekomendasi !</h5>   
            <a href="{{route('perhitungan')}}">
                <button class="btn btn-primary"><i class="fa fa-spinner"></i>&nbsp; Proses Rekomendasi</button>
            </a>
          @endif
        </div>
      </div>
  </div>

</div>
    
@endsection