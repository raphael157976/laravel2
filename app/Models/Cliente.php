<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $dates = [
                'create_at',
                'updated_at',
                'deleted_at'
    ];

    protected $fillable = [
        'nome',
        'ddd',
        'celular',
        'email',
        'observacoes',
    ];

    /*
    * --------------------------------------------------
    *     RELACIONAMENTOS
    * ---------------------------------------------------------
    */

    //public function clientes(): object {
    //    return $this->hasOne( TipoProduto::class,
    //                            'id_tipo_produto',
    //                            'id_tipo_produto');
    //}
}
