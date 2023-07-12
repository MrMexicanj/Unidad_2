<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaE extends Model
{
    use HasFactory;

    protected $table = 'EmpresaE';

    protected $fillable=[
        'id',
        'razon_social',
        'email',
        'rfc_emisor',
    ];
}
