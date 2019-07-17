<?php

namespace App\Http\Controllers;

use App\Kategorigaleri;
use App\User;
use App\Galeri;
use Carbon\Carbon;
use Session;
use Illuminate\Http\Request;

class GaleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeries = Galeri::with('kategorigaleri','user')->get();
        return view('backend.galeries.index', compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorigaleries = Kategorigaleri::orderBy('kategori')->get();
        $users = User::orderBy('name')->get();		
        return view('backend.galeries.create', compact('kategorigaleries','users'));
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
            $request->file('foto')->move("images/galeri", $fileName);
            $foto = $fileName;
        }
				
		Galeri::create(array_merge($request->all(), ['foto' => $foto]));
        return redirect()->route('galeries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeries = Galeri::findOrFail($id);

        return view('backend.galeries.show', compact('galeries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$galeries = Galeri::findOrFail($id);
		$kategorigaleries = Kategorigaleri::orderBy('kategori')->get();
        $users = User::orderBy('name')->get();		
        return view('backend.galeries.edit', compact('galeries','kategorigaleries','users'));		
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
		$galeri_data = Galeri::findOrFail($id);
		if($request->file('foto')) 
        {
            $file = $request->file('foto');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('foto')->move("images/galeri", $fileName);
            $galeri_data->foto = $fileName;
        }
		
		Galeri::find($id)->update(array_merge($request->all(), ['foto' => $galeri_data->foto]));
        return redirect()->route('galeries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Galeri::find($id)->delete();
		return redirect()->route('galeries.index');
    }
}
