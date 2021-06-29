<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Alert;

class MahasiswaController extends Controller
{
    

    public function index()
    {
        $mahasiswa = Mahasiswa::all(); //select * from mahasiswa
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request){
    
        Mahasiswa::create($request->all());
        alert()->success('Sukses', 'Data berhasil disimpan.');
        return redirect()->route('mahasiswa');
    }

    public function edit($id){

        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id){
    
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Berhasil mengedit data.','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy(Request $request, $id){
    
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Berhasil menghapus data.','success');
        return redirect()->route('mahasiswa');
    }
}

