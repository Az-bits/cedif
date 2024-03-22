<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalasModel extends Model
{
    use HasFactory;
    protected $table = 'salas';
    protected $primaryKey = 'id_sala';
    protected $fillable = ['id_usuario', 'nombre', 'subtitulo', 'descripcion', 'estado', 'cupo'];
    protected $guarded = [];
    public $timestamps = false;

    public function getAll($id = null)
    {
        $query = $this->select(
            's.id_sala',
            'id_usuario',
            'nombre',
            'subtitulo',
            'descripcion',
            's.estado',
            'cupo',
            'url',
            'm.id_multimedia'
        )
            ->from('salas as s')
            ->leftJoin('multimedia_salas as ms', 'ms.id_sala', '=', 's.id_sala')
            ->leftJoin('multimedia as m', 'm.id_multimedia', '=', 'ms.id_multimedia');

        if ($id !== null) {
            // Si se proporciona un ID, aplicamos un filtro WHERE
            $query->where('s.id_sala', $id);
            return $query->first();
        } else {
            // Si no se proporciona un ID, aplicamos otras condiciones
            $query->whereIn('s.estado', ['1', '2']);
            $salas = $query->get();
            return $salas;
        }
    }
}
