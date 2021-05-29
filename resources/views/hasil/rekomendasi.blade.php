@extends('master.index')

@section('title', 'Hasil Rekomendasi Smartphone')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Hasil Rekomendasi Smartphone </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Hasil Rekomendasi Smartphone</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    
@endsection

@section('content')
{{-- @if(session()->has('message')) --}}
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  {{ $notif }}
</div>
{{-- @endif --}}

<div class="row">
    <div class="col-12">
        <div class="card">
         
          <!-- /.card-header -->
          <div class="card-body">            
            <table class="table table-bordered table-hover">
              <thead>
              <tr align="center">
                <th>Ranking</th>
                {{-- <th>Ranking</th> --}}
                <th style="width: 15%">Merk Smartphone</th>
                {{-- <th style="width: 30%">Deskripsi</th> --}}
                <th>Spesifikasi</th>
                @php
                    $role = Auth::user()->getRoleNames()->first();
                    // dd($role);
                @endphp
                @if ($role == 'admin')
                <th>Nilai Vektor V</th>
                @endif
              </tr>
              </thead>

              <tbody>
                  @foreach ($rekomendasi as $item)
                      <tr>

                        <td style="text-align: center; vertical-align : middle">{{$item['ranking']}}</td>
                        <td style="text-align: center; vertical-align : middle">
                          {{Alternatif($item['alternatif'])}}
                          <hr>
                          <b>Harga : {{format_uang(Harga($item['alternatif']))}}</b>
                          <hr>
                        </td>
                        <td>
                            @php
                                $nilai = Nilai($item['alternatif']);
                            @endphp

                            @foreach ($nilai as $kriteria)

                            <b>{{$kriteria->nama_kriteria}}</b> : {{$kriteria->nama_subkriteria}} <br>
                                
                            @endforeach

                        </td>

                        @if ($role == 'admin')
                        <td style="text-align: center; vertical-align : middle">{{$item['nilaiV']}}</td>
                        @endif
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