<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoridadesModel extends Model
{
    use HasFactory;
    protected $table = 'autoridades';
    protected $primaryKey = 'id_autoridad';
    protected $fillable = ['id_persona', 'id_multimedia', 'cargo', 'estado'];
    protected $guarded = [];
    public $timestamps = false;
    public function getAll($id = null)
    {
        $query = $this->select(
            'id_autoridad',
            'a.id_persona',
            'p.nombre',
            'p.paterno',
            'p.materno',
            'a.id_multimedia',
            'cargo',
            'url'
        )
            ->from('autoridades as a')
            ->leftJoin('persona as p', 'p.id_persona', '=', 'a.id_persona')
            ->leftJoin('multimedia as m', 'm.id_multimedia', '=', 'a.id_multimedia');

        if ($id !== null) {
            // Si se proporciona un ID, aplicamos un filtro WHERE
            $query->where('id_autoridad', $id);
            return $query->first();
        } else {
            // Si no se proporciona un ID, aplicamos otras condiciones
            $query->whereIn('a.estado', ['1', '2']);
            $autoridades = $query->get();
            return $autoridades;
        }
    }
}
