<?php

namespace App\Http\Controllers;

use App\Kategoriberita;
use Illuminate\Http\Request;

class KategoriberitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriberitas = Kategoriberita::orderBy('kategori')->get();
        return view('backend.kategoriberitas.index', compact('kategoriberitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategoriberitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategoriberita::create($request->all());
        return redirect()->route('kategoriberitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategoriberitas = Kategoriberita::findOrFail($id);

        return view('backend.kategoriberitas.show', compact('kategoriberitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoriberitas = Kategoriberita::findOrFail($id);
        return view('backend.kategoriberitas.edit', compact('kategoriberitas'));
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
       Kategoriberita::find($id)->update($request->all());
        return redirect()->route('kategoriberitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategoriberita::find($id)->delete();
		return redirect()->route('kategoriberitas.index');
    }
}
