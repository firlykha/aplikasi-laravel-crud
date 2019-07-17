<?php

namespace App\Http\Controllers;

use App\Kategoriberita;
use App\User;
use App\Berita;
use Carbon\Carbon;
use Session;
use Illuminate\Http\Request;

class BeritasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::with('kategoriberita','user')->get();
        return view('backend.beritas.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriberitas = Kategoriberita::orderBy('kategori')->get();
        $users = User::orderBy('name')->get();		
        return view('backend.beritas.create', compact('kategoriberitas','users'));
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
            $request->file('foto')->move("images/berita", $fileName);
            $foto = $fileName;
        }
				
		Berita::create(array_merge($request->all(), ['foto' => $foto]));
        return redirect()->route('beritas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beritas = Berita::findOrFail($id);

        return view('backend.beritas.show', compact('beritas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$beritas = Berita::findOrFail($id);
		$kategoriberitas = Kategoriberita::orderBy('kategori')->get();
        $users = User::orderBy('name')->get();		
        return view('backend.beritas.edit', compact('beritas','kategoriberitas','users'));		
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
		$berita_data = Berita::findOrFail($id);
		if($request->file('foto')) 
        {
            $file = $request->file('foto');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('foto')->move("images/berita", $fileName);
            $berita_data->foto = $fileName;
        }
		
		Berita::find($id)->update(array_merge($request->all(), ['foto' => $berita_data->foto]));
        return redirect()->route('beritas.index');    
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::find($id)->delete();
		return redirect()->route('beritas.index');
    }
}
