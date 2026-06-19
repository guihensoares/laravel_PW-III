<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroFinanceiroModel extends Model
{
    use HasFactory;
    protected $table = 'registro_financeiro';
    protected $fillable = ['data', 'total_ganhos', 'total_gastos'];

    public function ganhos() {
        return $this->hasMany(GanhosModel::class, 'registro_financeiro_id');
    }

    public function gastos() {
        return $this->hasMany(GastosModel::class, 'registro_financeiro_id');
    }

    public function vendas() {
        return $this->hasMany(VendasModel::class, 'registro_financeiro_id');
    }

    public function getLucro() {
        return $this->total_ganhos - $this->total_gastos;
    }

    public function calcularTotais() {
        $this->total_ganhos = $this->ganhos()->sum('valor');
        $this->total_gastos = $this->gastos()->sum('valor');
        $this->save();
    }
}
