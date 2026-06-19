<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GastosModel extends Model
{
    use HasFactory;
    protected $table = 'gastos';
    protected $fillable = ['registro_financeiro_id', 'descricao', 'valor', 'categoria'];

    public const CATEGORIAS = [
        'materia_prima' => 'Matéria Prima',
        'equipamento' => 'Equipamento',
        'transporte' => 'Transporte',
        'embalagem' => 'Embalagem',
        'outros' => 'Outros',
    ];

    public function registro() {
        return $this->belongsTo(RegistroFinanceiroModel::class, 'registro_financeiro_id');
    }
}
