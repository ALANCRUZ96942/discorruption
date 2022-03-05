<?php

namespace App\Http\Controllers;

use App\Models\Acto;
use App\Models\Denuncia;
use App\Models\Escolaridad;
use App\Models\Estado;
use App\Models\Sexo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Builder\Function_;

class DenunciaController extends Controller
{
    public function create(){

        $actos = Acto::all();
        $sexos = Sexo::all();
        $estados = Estado::all();
        $escolaridades = Escolaridad::all();

        return view('denuncias.index', compact('actos','sexos','estados','escolaridades'));
    }

    public function store(Request $request){


        $datos = $request->validate([
            'name' => 'required',
            'date' => 'required',
            'age' => 'required',
        ]);
    
            $denuncia =  Denuncia::create($datos);
            $path = Storage::put('evidencias',$request->file('imagen'));
            $denuncia->imagen()->create([
                'url'=> $path
            ]);

        return redirect()->route('denuncias.index')
        ->with('success', 'Denuncia realizada correctamente');

    
    }
    public function index(){
        $denuncias = Denuncia::all();
        return view('denuncias.show',compact('denuncias'));
    }

}
