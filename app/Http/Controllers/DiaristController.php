<?php

namespace App\Http\Controllers;

use App\Models\Diarist;
use Illuminate\Http\Request;

class DiaristController extends Controller
{
    public function index(){
        $diarists = Diarist::get();
        return view('index', [
            'diarists' => $diarists
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');
        $dados['foto_usuario'] = $request->foto_usuario->store('public');
        
        Diarist::create($dados);

        return redirect()->route('diarists.index');
    }
}
