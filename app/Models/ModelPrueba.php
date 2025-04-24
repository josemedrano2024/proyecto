<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelPrueba extends Model
{
    protected $table = 'tblprueba';

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'rol_id',
        'precio',
        'stock',
        'cantidad',
        'total'
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
    public function tblprueba()
    {
        return $this->hasMany(TblPrueba::class, 'tblprueba_id');
    }
    
}
