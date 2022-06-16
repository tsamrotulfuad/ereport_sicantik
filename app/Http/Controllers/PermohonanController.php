<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permohonan = Permohonan::latest()->paginate(5);
        return view('admin.permohonan', compact('permohonan'))
        ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permohonan_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'jenis_izin' => 'required',
            'link_izin' => 'required',
        ]);

        $permohonan = Permohonan::create($request->all());

        if ($permohonan) {
            toastr()->success('Data berhasil ditambah!');
            return redirect()->route('permohonan.index');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permohonan $permohonan)
    {
        return view('admin.permohonan_detail', compact('permohonan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permohonan $permohonan)
    {
        return view('admin.permohonan_edit', compact('permohonan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permohonan $permohonan)
    {
        $request->validate([
            'no_permohonan' => 'required',
            'nama_pemohon' => 'required',
            'jenis_izin' => 'required',
            'link_izin' => 'required',
        ]);

        $permohonan->update($request->all());

        if ($permohonan) {
            toastr()->success('Data berhasil diubah!');
            return redirect()->route('permohonan.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permohonan $permohonan)
    {
        $permohonan->delete();

        toastr()->success('Data berhasil dihapus!');
        return redirect()->route('permohonan.index');
    }
}
