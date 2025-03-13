<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'materiales';  
    protected $primaryKey = 'id';  
    protected $fillable = [  
        'titulo',
        'isbn',
        'anio',
        'estante',
        'registradoPor',
        'status',
        'categorias_id'
    ];

    public function materiales() 
    {
        return $this->hasMany(Material::class, 'clasificacion_id');  
    }
}
