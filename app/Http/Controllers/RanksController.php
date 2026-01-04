<?php

namespace App\Http\Controllers;

use App\Models\Ranks;
use Illuminate\Http\Request;

class RanksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ranks = Ranks::all();

        return view("ranks", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aksi.createRanks');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_ranks' => 'required',
            'deskripsi' => 'required',
        ]);
        Ranks::create([
            'nama_ranks' => $request->nama_ranks,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->intended('/ranks')->with('success','Rank Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ranks $ranks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rank = Ranks::findOrFail($id);
        return view('aksi.editRanks', compact('rank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ranks' => 'required',
            'deskripsi' => 'required',
        ]);
        $rank = Ranks::findOrFail($id);
        $rank->nama_ranks = $request->nama_ranks;
        $rank->deskripsi = $request->deskripsi;
        $rank->save();

        return redirect('/ranks')->with('success', 'Ranks successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $rank = Ranks::findOrFail($id);

        $rank ->delete();

        return redirect('/ranks')->with('success', 'Ranks successfully deleted!');
    }
}
