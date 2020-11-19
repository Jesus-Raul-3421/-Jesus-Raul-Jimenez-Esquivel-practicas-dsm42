<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    //
    public function alumno()
    {
        $users = materias::select('id','nombre')
        ->where(20)
        ->get();
    }
}
