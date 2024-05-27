<?php

namespace App\Http\Controllers;

use App\Models\midia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MidiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $midia = midia::all();
       
        return view('midia.index', compact('midia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('midia.create');
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

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        midia::create($input);

        return redirect('midia')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(midia $midia)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(midia $midia)
    {
        //
        return view('midia.edit', compact('midia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, midia $midia)
    {
        //
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else {
            unset($input['image']);
        }

        $midia->update($input);

        return redirect('midia')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $image_path = '/image'; 

        if (file_exists($image_path)) {

       unlink($image_path);

    }
        $deleted = DB::table('midia')->where('id', '=', $id)->delete();
        return redirect('midia')->with('message', 'Data berhasil dihapus');
    }
}
