<?php

namespace App\Http\Controllers;

use App\Models\koperasi;
use Illuminate\Http\Request;

class KoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $koperasi = koperasi::all();

        return view('koperasi.index', compact('koperasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('koperasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required', 'description' => 'required','descriptionlengkap' =>'required', 'image' => 'required|image',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        koperasi::create($input);

        return redirect('/dashboards/koperasi')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(koperasi $koperasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(koperasi $koperasi)
    {
        //
        return view('koperasi.edit', compact('koperasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, koperasi $koperasi)
    {
        //
        $request->validate([
            'title' => 'required', 'description' => 'required','descriptionlengkap' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else {
            unset($input['image']);
        }

        $koperasi->update($input);

        return redirect('/dashboards/koperasi')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(koperasi $koperasi)
    {
        //
        $image_path = '/image'; 

        if (file_exists($image_path)) {

       unlink($image_path);

    }
        $koperasi->delete();

        return redirect('/dashboards/koperasi')->with('message', 'Data berhasil dihapus');
    }
}
