<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClienteEndereco extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clientes_enderecos';
    protected $primaryKey = 'id_cliente_endereco';
    protected $dates = [
                'create_at',
                'updated_at',
                'deleted_at'
    ];

    protected $fillable = [
        'id_cliente',
        'id_endereco',
        'observacoes',

    ];

    /*
    * --------------------------------------------------
    *     RELACIONAMENTOS
    * ---------------------------------------------------------
    */

    public function clinte(): object {
        return $this->hasOne( Cliente::class,
                                'id_cliente',
                                'id_cliente');
    }

    public function endereco(): object {
        return $this->hasOne( Endereco::class,
                                'id_endereco',
                                'id_endereco');
    }
}
