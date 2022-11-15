<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'destinatario',
		'estado',
		'peso',
		'descripcion',
		'contacto',
		'id_servicio',
		'id_precio',
		'id_cliente',
        
    ];

   

 


}
    


