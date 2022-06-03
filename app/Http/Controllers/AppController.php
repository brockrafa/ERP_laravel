<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('app.index');
    }
    public function chamados(){
        return view('app.chamados');
    }
    public function novoChamado(){
        return view('app.novo_chamado');
    }
    public function features(){
        return view('app.features');
    }
}
