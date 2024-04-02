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
    protected $fillable = ['id_usuario', 'titulo', 'descripcion', 'fecha_ini', 'fecha_fin', 'tipo', 'direccion', 'estado', 'id_multimedia'];
    protected $guarded = [];
    public $timestamps = false;
    public function getAll($id = null)
    {
        $query = $this->select(
            'id_publicacion',
            'id_usuario',
            'titulo',
            'descripcion',
            // DB::raw("DATE_FORMAT(fecha_ini, '%m/%d/%Y') fecha_ini"),
            // DB::raw("DATE_FORMAT(fecha_fin, '%m/%d/%Y') fecha_fin"),
            'fecha_ini',
            'fecha_fin',
            'tipo',
            'direccion',
            'p.estado',
            'p.id_multimedia',
            'm.url',
        )
            ->from('publicaciones as p')
            ->leftJoin('multimedia as m', 'm.id_multimedia', '=', 'p.id_multimedia');

        if ($id !== null) {
            // Si se proporciona un ID, aplicamos un filtro WHERE
            $query->where('id_publicacion', $id);
            return $query->first();
        } else {
            // Si no se proporciona un ID, aplicamos otras condiciones
            $query->whereIn('p.estado', ['1', '2']);
            $publicaciones = $query->get();
            return $publicaciones;
        }
    }
    public function getAllFront()
    {
        $query = $this->select(
            'id_publicacion',
            'id_usuario',
            'titulo',
            'descripcion',
            // DB::raw("DATE_FORMAT(fecha_ini, '%m/%d/%Y') fecha_ini"),
            // DB::raw("DATE_FORMAT(fecha_fin, '%m/%d/%Y') fecha_fin"),
            'fecha_ini',
            'fecha_fin',
            'tipo',
            'direccion',
            'p.estado',
            'p.id_multimedia',
            'm.url',
        )
            ->from('publicaciones as p')
            ->leftJoin('multimedia as m', 'm.id_multimedia', '=', 'p.id_multimedia');

        // Si no se proporciona un ID, aplicamos otras condiciones
        $query->whereIn('p.estado', ['1', '2'])->orderBy('fecha_ini', 'desc') // Ordenar por fecha_ini en orden descendente
            ->limit(2); // Limitar los resultados a 10 registros;
        $publicaciones = $query->get();
        return $publicaciones;
    }
}
