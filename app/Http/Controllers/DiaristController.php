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

    public function edit(int $id)
    {
        $diarist = Diarist::findOrFail($id);

        return view('edit',[
            'diarist' => $diarist
        ]);
    }

    public function update(int $id, Request $request)
    {
        $diarist = Diarist::findOrFail($id);

        $data = $request->except(['_token','_method']);

        if($request->hasFile('foto_usuario')){
            $data['foto_usuario'] = $request->foto_usuario->store('public');
        }

        $diarist->update($data);



        return redirect()->route('diarists.index');


    }
    public function destroy(int $id)
    {
        $diarist = Diarist::findOrFail($id);

        $diarist->delete();

        return redirect()->route('diarists.index');
    }
}


