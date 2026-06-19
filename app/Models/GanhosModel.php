<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GanhosModel extends Model
{
    use HasFactory;
    protected $table = 'ganhos';
    protected $fillable = ['registro_financeiro_id', 'descricao', 'valor'];

    public function registro() {
        return $this->belongsTo(RegistroFinanceiroModel::class, 'registro_financeiro_id');
    }
}
