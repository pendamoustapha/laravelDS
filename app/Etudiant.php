<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
protected $guarded=array();
//indique que la table mapp� par la classe Etudiant n'a pas de champs created...
public $timestamps=false;
}
