@extends('master.index')

@section('title', 'Data Pengguna')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Daftar Pengguna</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pengguna</li>
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
            <h3 class="card-title">Pegawai Kecamatan Pontianak Utara</h3>

            <div class="float-sm-right">
                <a href="{{route('pengguna.create')}}">
                    <button type="button" class="btn btn-success btn-block btn-sm"><i class="fa fa-plus"></i> Tambah Pengguna</button>
                </a>
            </div>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="table" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                {{-- <th>Password</th> --}}
                <th>Peran</th>
                <th style="width: 10%">Aksi</th>
              </tr>
              </thead>
              <tbody>

                @foreach ($users as $p)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$p->name}}</td>
                  <td>{{$p->username}}</td>
                  <td>{{$p->getRoleNames()->first()}}</td>
                 
                  <td align="center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="{{route('pengguna.edit', $p->id)}}">
                        <button type="button" class="btn btn-warning btn-xs">Edit</button>
                      </a> &nbsp;
                      <form action="{{route('pengguna.destroy', $p->id)}}" method="POST">
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