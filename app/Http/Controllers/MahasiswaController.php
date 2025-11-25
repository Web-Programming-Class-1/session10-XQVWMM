<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Tabel mahasiswa di sini";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form-pendaftaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama'=> 'required|min:3|max:50',
            'jenis_kelamin'=>"required|in:P,L",
            'jurusan'=> 'required',
            'alamat'=>'',
        ]);
        dump($validateData);
    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }
}
