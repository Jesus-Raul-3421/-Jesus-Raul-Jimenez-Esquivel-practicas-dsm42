<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Notifications\Notifiable;
class materias extends Model
{
    //
    use Notifiable;

    /**
     * the atributes that are nass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'nombre',
    ];
   
    public function materias()
    {
        $users = materias::select('id','nombre')
        ->where(20)
        ->get();
    }

}

