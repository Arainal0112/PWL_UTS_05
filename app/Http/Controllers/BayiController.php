<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bayi;
use Illuminate\Support\Facades\DB;

class BayiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        if($request->has('nama')) {
            $nama = request('nama');
            $bayi = bayi::where('nama', 'LIKE', '%'.$nama.'%')->paginate(5);
            return view('bayi.data_bayi', compact('bayi'));
        } else {
            // $mahasiswas = Mahasiswa::all(); // Mengambil semua isi tabel
            $bayi = bayi::orderBy('no_urut', 'desc')->paginate(5);
            return view('bayi.data_bayi', compact('bayi'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
        }
    }

    public function create()
    {
        return view('bayi.create2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'no_urut' => 'required',
        'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        bayi::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('bayi.index')
        ->with('success', 'Data Bayi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $no_urut
     * @return \Illuminate\Http\Response
     */
    public function show($no_urut)
    {
        
        $bayi = bayi::find($no_urut);
        return view('bayi.detail', compact('bayi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $no_urut
     * @return \Illuminate\Http\Response
     */
    public function edit($no_urut)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $bayi = bayi::find($no_urut);
        return view('bayi.edit', compact('bayi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $no_urut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_urut)
    {
        //melakukan validasi data
        $request->validate([
            'no_urut' => 'required',
        'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        bayi::find($no_urut)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('bayi.index')
        ->with('success', 'Mahasiswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $no_urut
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_urut)
    {
        //fungsi eloquent untuk menghapus data
        bayi::find($no_urut)->delete();
        return redirect()->route('bayi.index')
        -> with('success', 'Data Bayi Berhasil Dihapus');
    }

    
}
