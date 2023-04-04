<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bayi;

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
            return view('data_bayi', compact('bayi'));
        } else {
            // $Bayis = Bayi::all(); // Mengambil semua isi tabel
            $Bayis = bayi::orderBy('nim', 'desc')->paginate(5);
            return view('data_bayi', compact('bayi'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('Bayi.create');
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
            // 'no_urut' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        bayi::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('Bayi.index')
        ->with('success', 'bayi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $no_urut
     * @return \Illuminate\Http\Response
     */
    public function show($no_urut)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim bayi
        $bayi = bayi::find($no_urut);
        return view('Bayi.detail', compact('bayi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $no_urut
     * @return \Illuminate\Http\Response
     */
    public function edit($no_urut)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim bayi untuk diedit
        $bayi = bayi::find($no_urut);
        return view('Bayi.edit', compact('bayi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $nim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
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
        bayi::find($nim)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('Bayi.index')
        ->with('success', 'bayi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $nim
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        //fungsi eloquent untuk menghapus data
        bayi::find($nim)->delete();
        return redirect()->route('Bayi.index')
        -> with('success', 'bayi Berhasil Dihapus');
    }
}
