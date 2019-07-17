<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoriartikel extends Model
{
    protected $table ='kategoriartikel';
	protected $fillable = ['kategori','keterangan'];

    public function artikels()
    {
        return $this->hasMany('App\Artikels');
    }

}
