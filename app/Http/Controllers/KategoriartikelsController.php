<?php

namespace App\Http\Controllers;

use App\Kategoriartikel;
use Illuminate\Http\Request;

class KategoriartikelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriartikels = Kategoriartikel::orderBy('kategori')->get();
        return view('backend.kategoriartikels.index', compact('kategoriartikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategoriartikels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategoriartikel::create($request->all());
        return redirect()->route('kategoriartikels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategoriartikels = Kategoriartikel::findOrFail($id);

        return view('backend.kategoriartikels.show', compact('kategoriartikels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoriartikels = Kategoriartikel::findOrFail($id);
        return view('backend.kategoriartikels.edit', compact('kategoriartikels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       Kategoriartikel::find($id)->update($request->all());
        return redirect()->route('kategoriartikels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategoriartikel::find($id)->delete();
		return redirect()->route('kategoriartikels.index');
    }
}
