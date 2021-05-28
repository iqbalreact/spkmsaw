@extends('master.index')

@section('title', 'Data Alternatif')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Daftar Alternatif</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Alternatif</li>
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
                <a href="{{route('alternatif.create')}}">
                    <button type="button" class="btn btn-success btn-block btn-sm"><i class="fa fa-plus"></i> Tambah Alternatif</button>
                </a>
            </div>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th style="width: 20%">Nama Alternatif</th>
                <th style="width: 10%">Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>

                @foreach ($alternatifs as $alternatif)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$alternatif->nama_alternatif}}</td>
                  
                  <td>Rp.{{format_uang($alternatif->harga)}}</td>
                  <td>{{$alternatif->deskripsi}}</td>
                  {{-- <td>{{$alternatif->gambar}}</td> --}}
                  <td align="center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="{{route('alternatif.edit', $alternatif->id)}}">
                        <button type="button" class="btn btn-warning btn-xs">Edit</button>
                      </a> &nbsp;
                      <form action="{{route('alternatif.destroy', $alternatif->id)}}" method="POST">
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

</div>
    
@endsection