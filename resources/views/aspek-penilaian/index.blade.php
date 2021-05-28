@extends('master.index')

@section('title', 'Data Aspek Penilaian Kinerja')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Daftar Aspek Penilaian Kinerja</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Aspek Penilaian Kinerja</li>
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
            <h3 class="card-title">Aspek Penilaian Kinerja </h3>

            <div class="float-sm-right">
                <a href="{{route('aspek-penilaian.create')}}">
                    <button type="button" class="btn btn-success btn-block btn-sm"><i class="fa fa-plus"></i> Tambah Aspek Penilaian</button>
                </a>
            </div>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Kategori Penilaian</th>
                <th>Uraian Aspek</th>
                <th style="width: 10%">Aksi</th>
              </tr>
              </thead>
              <tbody>

                @foreach ($aspeks as $aspek)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$aspek->kategori_id}}</td>
                  <td>{{$aspek->aspek}}</td>
                  <td align="center">
                    
                      <a href="{{route('aspek-penilaian.edit', $aspek->id)}}">
                        <button type="button" class="btn btn-warning btn-sm">Edit</button>
                      </a>


                      <form action="{{route('aspek-penilaian.destroy', $aspek->id)}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                      </form>

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