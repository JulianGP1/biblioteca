<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class clasificacion extends Model
{
    use HasFactory;

    protected $table = 'clasificacion';  
    protected $primaryKey = 'id';  
    protected $fillable = [  
        'nombre',
        'precio',
        'descripcion',
        'estado'
    ];
    public function clasificacion(){
        return $this->belongTo (clasificacion::class);

    }
}
