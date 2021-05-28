@extends('master.index')

@section('title', 'Edit Pengguna')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Pengguna</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Pengguna</li>
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
                <h3 class="card-title">Edit Pengguna</h3>
            </div>
            <form action="{{route('pengguna.update', $pengguna->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" value="{{$pengguna->name}}" name="name"  placeholder="Masukkan NIP Pegawai">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" value="{{$pengguna->username}}" name="username" id="username" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" name="password" value="{{$pengguna->password}}" id="password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$pengguna->email}}" placeholder="Masukkan Email Pegawai">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Peran</label>
                        <select name="role" id="role" class="form-control" required>
                            <option value="">Pilih</option>
                            @foreach ($roles as $r)
                            <option value="{{$r->id}}">{{ucfirst($r->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                    
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
