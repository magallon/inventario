<?php

namespace inventario;

use Illuminate\Database\Eloquent\Model;



class Departamento extends Model
{

   public $timestamps = false;

   protected $table = "departamento";

   protected $fillable = ['nombre'];

}
