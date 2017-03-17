<?php

namespace App\Http\Controllers\Institucional;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InstitucionalController extends Controller{
    
    public function sobre(){
        return view('sobre');
    }

    public function contato(){
        return view('contato');
    }

    public function contatoSend(){
        return Request::all();
    }

}
