<?php

namespace App\Http\Controllers;

use App\Kategorigaleri;
use Illuminate\Http\Request;

class KategorigaleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorigaleries = Kategorigaleri::orderBy('kategori')->get();
        return view('backend.kategorigaleries.index', compact('kategorigaleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategorigaleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategorigaleri::create($request->all());
        return redirect()->route('kategorigaleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategorigaleries = Kategorigaleri::findOrFail($id);

        return view('backend.kategorigaleries.show', compact('kategorigaleries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategorigaleries = Kategorigaleri::findOrFail($id);
        return view('backend.kategorigaleries.edit', compact('kategorigaleries'));
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
       Kategorigaleri::find($id)->update($request->all());
        return redirect()->route('kategorigaleries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategorigaleri::find($id)->delete();
		return redirect()->route('kategorigaleries.index');
    }
}
