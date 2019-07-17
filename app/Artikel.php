<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
	protected $table = 'artikel'; 
    protected $fillable = ['judul','foto', 'isi', 'kategoriartikel_id','user_id'];

    public function kategoriartikel()
    {
        return $this->belongsTo('App\Kategoriartikel');
    }

	public function user()
    {
        return $this->belongsTo('App\User');
    }
	
}
