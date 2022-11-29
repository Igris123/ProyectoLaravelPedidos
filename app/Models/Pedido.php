<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Pedido extends Model
{
    use HasFactory;
    use Searchable;




    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
       //tablas a buscar xd
        return [
            'destinatario' => $this->destinatario,

            
        ];
           
    }



     
}
