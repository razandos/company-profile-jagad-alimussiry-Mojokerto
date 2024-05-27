<?php

namespace App\Http\Controllers;

use App\Models\komuniti;
use Illuminate\Http\Request;

class KomunitiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $komuniti = komuniti::all();

        return view('komuniti.index', compact('komuniti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('komuniti.create');
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

        komuniti::create($input);

        return redirect('/dashboards/komuniti')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(komuniti $komuniti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(komuniti $komuniti)
    {
        //
        return view('komuniti.edit', compact('komuniti'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, komuniti $komuniti)
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

        $komuniti->update($input);

        return redirect('/dashboards/komuniti')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(komuniti $komuniti)
    {
        //
        $image_path = '/image'; 

        if (file_exists($image_path)) {

       unlink($image_path);

    }
        $komuniti->delete();

        return redirect('/dashboards/komuniti')->with('message', 'Data berhasil dihapus');
    }
}
