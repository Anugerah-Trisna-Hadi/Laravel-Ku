<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mahasiswa = Mahasiswa::orderBy('id', 'asc')->paginate(10);
        return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);
    }
    public function tambah()
    {
        return view('mahasiswa.tambah');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'nama' => 'required',
            'nrp' => 'required',
            'email' => 'required|email',
            'jurusan' => 'required'
        ]);
 
        Mahasiswa::create([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);
 
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.detail',['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $mahasiswa = Mahasiswa::find($id);
       return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    $this->validate($request,[
            'nama' => 'required',
            'nrp' => 'required',
            'email' => 'required|email',
            'jurusan' => 'required'
    ]);
 
    $mahasiswa = Mahasiswa::find($id);
    $mahasiswa->nama = $request->nama;
    $mahasiswa->nrp = $request->nrp;
    $mahasiswa->email = $request->email;
    $mahasiswa->jurusan = $request->jurusan;
    $mahasiswa->save();
    return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
    $mahasiswa = Mahasiswa::find($id);
    $request->session()->flash('status', 'Task was successful!');
    $mahasiswa->delete();
    return redirect('/mahasiswa');
    }
    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->keyword;
 
        // mengambil data dari table pegawai sesuai pencarian data
        $mahasiswa = Mahasiswa::orderBy('id','asc')->where('nama','like',"%".$search."%")->orwhere('nrp','like',"%".$search."%")->orwhere('email','like',"%".$search."%")->orwhere('jurusan','like',"%".$search."%")->paginate(10);
 
        // mengirim data pegawai ke view index
        return view('mahasiswa.index',['mahasiswa' => $mahasiswa, 'search' => $search]);
    }
}
