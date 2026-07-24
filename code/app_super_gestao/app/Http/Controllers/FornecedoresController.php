<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor1', 
                'status' => 'N', 
                'cnpj' => '00.000.000/0000-00'],
            1 => [
                'nome' => 'Fornecedor2', 
                'status' => 'S']   
            ];
        return view('app.fornecedor.index', compact('fornecedores'));;
    }
}
