<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Berita;
use App\Galeri;
use App\User;
use Auth;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::get();
        $berita   = Berita::get();
		$galeri   = Galeri::get();
        $user   = User::get();		
        if(Auth::user()->level == 'user')
        {
            $dataartikels = Artikel::where('anggota_id', Auth::user()->anggota->id)
                                ->get();
            $databeritas = Berita::where('anggota_id', Auth::user()->anggota->id)
                                ->get();	
			$datagaleries = Galeri::where('anggota_id', Auth::user()->anggota->id)
                                ->get();				
        } else {
            $dataartikels = Artikel::orderBy('kategoriartikel_id')->get();
            $databeritas = Berita::orderBy('kategoriberita_id')->get();	
			$datagaleries = Galeri::orderBy('kategorigaleri_id')->get();
        }
		
        return view('backend.dashboard.index', compact('artikel','berita','galeri','user','dataartikels','databeritas','datagaleries'));
    }
}
