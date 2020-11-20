<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Notifications\Notifiable;

class materias extends FormRequest
{
    /**
     * Determine if the user is authorized to take this request.
     * 
     * @return bool
     */
    public function authorize(){

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * 
     * @var array
     */
   public function rules(){

    return[
        //
        'nombre'=>'required'
    ];
   }
   
}
