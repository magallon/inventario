<?php

namespace inventario;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
   public $timestamps = false;
   protected $table = "empleado";
   protected $fillable = ['nombre'];
}
