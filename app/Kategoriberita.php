<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoriberita extends Model
{
    protected $table ='kategoriberita';
	protected $fillable = ['kategori','keterangan'];

    public function beritas()
    {
        return $this->hasMany('App\Beritas');
    }

}
