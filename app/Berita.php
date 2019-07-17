<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
	protected $table = 'berita'; 
    protected $fillable = ['judul','foto','isi', 'kategoriberita_id','user_id'];

    public function kategoriberita()
    {
        return $this->belongsTo('App\Kategoriberita');
    }

	public function user()
    {
        return $this->belongsTo('App\User');
    }
	
}
