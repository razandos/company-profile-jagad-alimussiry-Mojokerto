<?php

namespace App\Http\Controllers;

use App\Models\istigosah;
use Illuminate\Http\Request;

class IstigosahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $istigosah = istigosah::all();

        return view('istigosah.index', compact('istigosah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('istigosah.create');
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

        istigosah::create($input);

        return redirect('/dashboards/istigosah')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(istigosah $istigosah)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(istigosah $istigosah)
    {
        //
        return view('istigosah.edit', compact('istigosah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, istigosah $istigosah)
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

        $istigosah->update($input);

        return redirect('/dashboards/istigosah')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(istigosah $istigosah)
    {
        //
        $image_path = '/image'; 

        if (file_exists($image_path)) {

       unlink($image_path);

    }
        $istigosah->delete();

        return redirect('/dashboards/istigosah')->with('message', 'Data berhasil dihapus');
    }
}
