@extends('master.index')

@section('title', 'Tambah Pengguna')

@section('breadcrumb')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tambah Pengguna</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Pengguna</li>
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
                <h3 class="card-title">Tambah Pegawai</h3>
            </div>
            <form action="{{route('pengguna.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>

                    </div> --}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="username" id="username" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" name="password" value="pegawai123" id="password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="email"  placeholder="Masukkan Email Pengguna">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Peran</label>
                        <select name="role" id="role" multiple="multiple" style="width: 100%;" class="form-control select2" required>
                            <option value="">Pilih</option>
                            @foreach ($roles as $r)
                            @if ($r->name != 'admin')
                            <option value="{{$r->id}}">{{ucfirst($r->name)}}</option>
                            @endif
                            @endforeach
                        </select>

                    </div>
                                        
                </div>
        
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-xs">Tambah</button>

                    <button type="reset" class="btn btn-danger btn-xs">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

$( "#nip" ).change(function() {
    $('#username').val(this.value)
});
</script>

@endsection


