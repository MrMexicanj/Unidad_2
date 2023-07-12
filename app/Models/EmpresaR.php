<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaR extends Model
{
    use HasFactory;

    protected $table = 'EmpresaR';

    protected $fillable=[
        'id',
        'nombre',
        'direccion',
        'rfc',
        'contacto',
        'email'
    ];
}
