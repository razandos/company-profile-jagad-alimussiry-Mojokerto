<?php

namespace App\Http\Controllers;

use App\Models\bimbel;
use Illuminate\Http\Request;

class BimbelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bimbel = bimbel::all();

        return view('bimbel.index', compact('bimbel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('bimbel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'descriptionlengkap' => 'required',
        'image' => 'required|image',
    ]);

    $input = $request->all();
    $input['user_id'] = auth()->user()->id;

    // Process description using explode if necessary
    if (isset($input['description']) && !empty($input['description'])) {
        $paragraphs = explode("\n\n", $input['description']); // Split by two newlines

        // Validate or process paragraphs as needed
        // ... (e.g., validate paragraph length, format paragraphs...)
        $input['description'] = implode("\n\n", $paragraphs); // Join back after processing
    }

    if ($image = $request->file('image')) {
        $destinationPath = 'image/';
        $imageName = $image->getClientOriginalName();
        $image->move($destinationPath, $imageName);
        $input['image'] = $imageName;
    }

    bimbel::create($input);

    return redirect('/dashboards/bimbel')->with('message', 'Data berhasil ditambahkan');
}


    /**
     * Display the specified resource.
     */
    public function show(bimbel $bimbel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bimbel $bimbel)
    {
        //
        return view('bimbel.edit', compact('bimbel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bimbel $bimbel)
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

        $bimbel->update($input);

        return redirect('/dashboards/bimbel')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bimbel $bimbel)
    {
        //
        $image_path = '/image'; 

        if (file_exists($image_path)) {

       unlink($image_path);

    }
        $bimbel->delete();

        return redirect('/dashboards/bimbel')->with('message', 'Data berhasil dihapus');
    }
}
