<?php

namespace inventario;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
   protected table = "departamento"

   protected $fillable = ['nombre'];
}
