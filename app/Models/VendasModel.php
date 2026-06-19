<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendasModel extends Model
{
    use HasFactory;
    protected $table = 'vendas';
    protected $fillable = ['registro_financeiro_id', 'produto', 'quantidade', 'valor_unitario'];

    public function registro() {
        return $this->belongsTo(RegistroFinanceiroModel::class, 'registro_financeiro_id');
    }

    public function getTotal() {
        return $this->quantidade * $this->valor_unitario;
    }
}
