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
}
