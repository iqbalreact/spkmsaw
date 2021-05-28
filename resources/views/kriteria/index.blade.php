@extends('master.index')

@section('title', 'Data Kriteria')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Daftar Kriteria</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Kriteria</li>
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
                <a href="{{route('kriteria.create')}}">
                    <button type="button" class="btn btn-success btn-block btn-sm"><i class="fa fa-plus"></i> Tambah Kriteria</button>
                </a>
            </div>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama Kriteria</th>
                <th>Bobot</th>
                <th>Atribut</th>
                <th style="width: 10%">Aksi</th>
              </tr>
              </thead>
              <tbody>

                @foreach ($kriterias as $kriteria)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$kriteria->nama_kriteria}}</td>
                  <td>{{$kriteria->bobot_kriteria}}</td>
                  <td>{{$kriteria->atribut_kriteria}}</td>
                  <td align="center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="{{route('kriteria.edit', $kriteria->id)}}">
                        <button type="button" class="btn btn-warning btn-xs">Edit</button>
                      </a> &nbsp;
                      <form action="{{route('kriteria.destroy', $kriteria->id)}}" method="POST">
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