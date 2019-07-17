<?php

namespace App\Http\Controllers;

use App\Kategoriartikel;
use App\User;
use App\Artikel;
use Carbon\Carbon;
use Session;
use Illuminate\Http\Request;

class ArtikelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::with('kategoriartikel','user')->get();
        return view('backend.artikels.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriartikels = Kategoriartikel::orderBy('kategori')->get();
        $users = User::orderBy('name')->get();		
        return view('backend.artikels.create', compact('kategoriartikels','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		if($request->file('foto') == '') {
            $foto = NULL;
        } else {
            $file = $request->file('foto');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('foto')->move("images/artikel", $fileName);
            $foto = $fileName;
        }
				
		Artikel::create(array_merge($request->all(), ['foto' => $foto]));
        return redirect()->route('artikels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikels = Artikel::findOrFail($id);

        return view('backend.artikels.show', compact('artikels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$artikels = Artikel::findOrFail($id);
		$kategoriartikels = Kategoriartikel::orderBy('kategori')->get();
        $users = User::orderBy('name')->get();		
        return view('backend.artikels.edit', compact('artikels','kategoriartikels','users'));		
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
		$artikel_data = Artikel::findOrFail($id);
		if($request->file('foto')) 
        {
            $file = $request->file('foto');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('foto')->move("images/artikel", $fileName);
            $artikel_data->foto = $fileName;
        }
		
		Artikel::find($id)->update(array_merge($request->all(), ['foto' => $artikel_data->foto]));
        return redirect()->route('artikels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artikel::find($id)->delete();
		return redirect()->route('artikels.index');
    }
}
