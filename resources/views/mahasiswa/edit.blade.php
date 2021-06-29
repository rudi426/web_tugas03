@extends('layouts.app')

@section('content')
@if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Matkul</div>

                <div class="card-body">
                    <form action="{{ route('update_mahasiswa', $mahasiswa->id) }}" method="post">
                    @csrf
                        <div class="form-group">

                                <label for="user_id">User Id</label>
                                <input type="number" min ="1" name="user_id" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->user_id }}"><br>

                                <label for="npm">NPM</label>
                                <input type="number" min="1" name="npm" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->npm }}"><br>

                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}"><br>

                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}"><br>

                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->alamat }}"><br>

                                <label for="telepon">User Id</label>
                                <input type="number" min="1" name="telepon" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->telepon }}"><br>

                                <label for="gender">Gender</label>
                                <input type="text" name="gender" class="form-control" value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->gender }}"><br>

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
