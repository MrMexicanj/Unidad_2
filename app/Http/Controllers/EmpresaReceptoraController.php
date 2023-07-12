<?php

namespace App\Http\Controllers;

use App\Models\EmpresaR;
use Illuminate\Http\Request;

class EmpresaReceptoraController extends Controller
{
    public function index(){
        $empresareceptoras = EmpresaR::get();
        return view('posts.index');
     }

        public function store(Request $request){
      
            EmpresaR::create([
            'id' =>  $request->id,
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'rfc' => $request->rfc,
            'contacto' => $request->contacto,
            'email' => $request->email
            ]);

            return to_route('posts.index');
         }
}
