<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function imagen(){
        return $this->morphOne(Imagen::class,'imagenable');
    }

    public function estado()
    {
      return $this->belongsTo(Estado::class);
    }
    public function acto()
    {
      return $this->belongsTo(Acto::class);
    }

    public function sexo()
    {
      return $this->belongsTo(Sexo::class);
    }


}
