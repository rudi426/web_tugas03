@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('simpan_mahasiswa') }}" method="post">
                    @csrf
                        <div class="form-group">

                                <label for="user_id">User Id</label>
                                <input type="number" min ="1" name="user_id" class="form-control" placeholder="Tambahkan User Id"><br>

                                <label for="npm">NPM</label>
                                <input type="number" min="1" name="npm" class="form-control" placeholder="Tambahkan NPM"><br>

                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal Lahir"><br>

                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Tempat Lahir"><br>

                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Tambahkan Alamat"><br>

                                <label for="telepon">Telepon</label>
                                <input type="number" min="1" name="telepon" class="form-control" placeholder="Tambahkan Telepon"><br>

                                <label for="gender">Gender</label>
                                <input type="text" name="gender" class="form-control" placeholder="Tambahkan Gender"><br>

                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">Batal</a>
                                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
