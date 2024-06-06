<?php

namespace App\Http\Controllers;

use App\Models\karya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class karyaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karya = karya::all();
        return view('karya.karya', compact('karya'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karya.karya-entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_categories';
        $gambar->move($tujuan_upload, $nama_gambar);

        karya::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $nama_gambar,
        ]);

        return redirect('/karya');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_karya)
    {
        $karya = karya::find($id_karya);
        return view('karya.karya-edit', compact('karya'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_karya)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $karya = karya::find($id_karya);

        if($request->hasFile('gambar')){

            File::delete('img_categories/'.$karya->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_categories';
            $gambar->move($tujuan_upload, $nama_gambar);
            $karya->gambar = $nama_gambar;
        }

        $karya->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect('/karya');

    }

    public function delete($id_karya)
    {
        $karya = karya::find($id_karya);
        return view('karya.karya-hapus', compact('karya'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_karya)
    {
        $karya = karya::find($id_karya);
        File::delete('img_categories/'.$karya->gambar);
        $karya->delete();
        return redirect('/karya');

    }
}
