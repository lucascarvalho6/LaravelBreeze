<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(): View
    {
        $cliente = Cliente::all();
 
        return view('cliente.cadastrar', compact('cliente'));
    }
}
