<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model{
   // protected $fillable = ['name', 'phone', 'email']; //lista com as propriedades que podem mudar (whitelist)
   protected $guarded = ['id', 'created_at', 'updated_at']; //lista com atributos ignorados (blacklist)

    public static $rules = [
        'name' => 'required',
        'email' => 'required|email'
    ];
}
