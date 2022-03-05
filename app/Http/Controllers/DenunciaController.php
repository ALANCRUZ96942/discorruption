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
        $escolaridades = Escolaridad::all();
        $estados = Estado::pluck('name', 'id');
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
           
            
                                    // Available alpha caracters
                $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

                // generate a pin based on 2 * 7 digits + a random character
                $pin = mt_rand(1000000, 9999999)
                    . mt_rand(1000000, 9999999)
                    . $characters[rand(0, strlen($characters) - 1)];

                // shuffle the result
                $string = str_shuffle($pin);


        return redirect()->route('fin')
        ->with('success', 'Denuncia realizada correctamente, con el número de folio: '.$string);

    
    }
    public function index(){
        $denuncias = Denuncia::all();
        return view('denuncias.show',compact('denuncias'));
    }

}
