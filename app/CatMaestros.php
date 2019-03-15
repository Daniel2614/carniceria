<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatMaestros extends Model
{
    protected $table = 'evaluacion_maestros';

    protected $fillable = [
    	'id',
    	'nombre',
	];
	public function materias()
    {
    	return $this->belongsToMany('App\CatMaterias', 'evaluacion_maestros','idMaestro','idMateria')->withTimestamps();
    }
}
