<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;



class usuarioController extends Controller
{
    public function index()
    {
    	$contato = new Contato();
    	$con = $contato->lista();
    	dd($con->nome);

    	return view('contato.index');
        
    }
    public function criar(Request $req)
    {
    	dd($req->all());
    	return "criar controller";
    }
    public function editar()
    {
    	return "editar controller";
    }
}
