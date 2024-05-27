<?php

namespace App\Http\Controllers;

use App\Models\konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $konsultasi = konsultasi::all();

        return view('konsultasi.index', compact('konsultasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('konsultasi.create');
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

        konsultasi::create($input);

        return redirect('/dashboards/konsultasi')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(konsultasi $konsultasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(konsultasi $konsultasi)
    {
        //
        return view('konsultasi.edit', compact('konsultasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, konsultasi $konsultasi)
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

        $konsultasi->update($input);

        return redirect('/dashboards/konsultasi')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(konsultasi $konsultasi)
    {
        //
        $image_path = '/image'; 

        if (file_exists($image_path)) {

       unlink($image_path);

    }
        $konsultasi->delete();

        return redirect('/dashboards/konsultasi')->with('message', 'Data berhasil dihapus');
    }
}
