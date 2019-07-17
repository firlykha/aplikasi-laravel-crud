<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorigaleri extends Model
{
    protected $table ='kategorigaleri';
	protected $fillable = ['kategori','keterangan'];

    public function galeries()
    {
        return $this->hasMany('App\Galeries');
    }

}
