<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class PublicacionModel extends Model
{
    use HasFactory;
    protected $table = 'publicaciones';
    protected $primaryKey = 'id_publicacion';
    protected $fillable = ['id_usuario', 'titulo', 'descripcion', 'fecha_ini', 'fecha_fin', 'tipo', 'direccion', 'estado'];
    protected $guarded = [];
    public $timestamps = false;
    public function getAll()
    {
        $publicaciones = $this->select(
            'id_publicacion',
            'id_usuario',
            'titulo',
            'descripcion',
            DB::raw("DATE_FORMAT(fecha_ini, '%m/%d/%Y') fecha_ini"),
            DB::raw("DATE_FORMAT(fecha_fin, '%m/%d/%Y') fecha_fin"),
            'tipo',
            'direccion',
            'estado',
            'id_multimedia'
        )
            ->whereIn('estado', ['1', '2'])
            ->get();
        return $publicaciones;
    }
}
