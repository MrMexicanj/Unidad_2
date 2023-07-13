<?php

namespace App\Http\Controllers;

use App\Models\EmpresaE;
use Illuminate\Http\Request;

class EmpresaEmisoraController extends Controller
{

    public function index(){
        $empresaemisoras = EmpresaE::get();
        return view('fact.index', compact('empresaemisoras'));
     }

        public function store(Request $request){
      
            EmpresaE::create([
            'id' =>  $request->id,
            'razon_social' => $request->razon_social,
            'email' => $request->email,
            'rfc_emisor' => $request->rfc_emisor
            ]);

            return route('posts.index');
         }
         
}

