<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaestroMateria extends Model
{
    protected $table = 'ma_maria';

     protected $fillable = [
    	'idMaestro',
		'idMateria'
    ];

    public function maestros()
    {
        return $this->belongsTo('App\CatMaestros', 'idMaestro');
    }

    public function materias()
    {
        return $this->belongsTo('App\CatMaterias', 'idMateria');
    }

}
