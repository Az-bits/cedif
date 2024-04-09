<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriaModel extends Model
{
    use HasFactory;
    protected $table = 'galeria';
    protected $primaryKey = 'id_galeria';
    protected $fillable = [
        'titulo',
        'descripcion',
        'estado',
        'id_usuario',
        'fecha_creacion',
    ];
    protected $guarded = [];
    public $timestamps = false;
    public function getAll($id = null, $priory = null)
    {
        $query = $this->select(
            'g.id_galeria',
            'id_usuario',
            'titulo',
            'descripcion',
            'g.estado',
            'url',
            'm.id_multimedia',
            'g.fecha_creacion'
        )
            ->from('galeria as g')
            ->leftJoin('multimedia_galeria as mg', 'mg.id_galeria', '=', 'g.id_galeria')
            ->leftJoin('multimedia as m', 'm.id_multimedia', '=', 'mg.id_multimedia');

        if ($id !== null) {
            // Si se proporciona un ID, aplicamos un filtro WHERE
            $query->where('g.id_galeria', $id);
            return $query->first();
        } else {
            // Si no se proporciona un ID, aplicamos otras condiciones
            $query->whereIn('g.estado', ['1', '2']);
            $query->orderBy('g.fecha_creacion', 'desc');

            // $query->whereIn('g.estado', ['3']);
            if ($priory) {
                $galeria = $query->paginate(5);
            } else {
                $galeria = $query->get();
            }
            return $galeria;
        }
    }
}
