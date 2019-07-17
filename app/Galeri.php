<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
	protected $table = 'galeri'; 
    protected $fillable = ['judul','kategorigaleri_id','foto', 'keterangan', 'user_id'];

    public function kategorigaleri()
    {
        return $this->belongsTo('App\Kategorigaleri');
    }

	public function user()
    {
        return $this->belongsTo('App\User');
    }
	
}
