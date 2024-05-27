<?php

namespace App\Http\Controllers;

use App\Models\science;
use Illuminate\Http\Request;

class ScienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $science = science::all();

        return view('science.index', compact('science'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('science.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        science::create($input);

        return redirect('/dashboards/science')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(science $science)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(science $science)
    {
        //
        return view('science.edit', compact('science'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, science $science)
    {
        //
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'required|image',
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

        $science->update($input);

        return redirect('/dashboards/science')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(science $science)
    {
        //
        $image_path = '/image'; 

        if (file_exists($image_path)) {

       unlink($image_path);

    }
        $science->delete();

        return redirect('/dashboards/science')->with('message', 'Data berhasil dihapus');
    }
}
