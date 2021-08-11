<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Telefone;

class HomeController extends Controller
{
    public function index(){
        $pessoa=Pessoa::all();
      
        return view('welcome',['usuario'=>$pessoa]);
    }

    public function store(Request $request) {

        $pessoa = new Pessoa;

        $pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;
        

        $pessoa->save();

          if(!empty($request->t1)){
            $telefone = new Telefone;
            $telefone->id_usuario = $pessoa->id; // pega o id da pessoa, id_usuario é chave estrangeira
            $telefone->telefone = $request->t1;
            $telefone->descricao = $request->d1;
        
            $telefone->save();
          } 
          if(!empty($request->t2)){
            $telefone = new Telefone;
            $telefone->id_usuario = $pessoa->id; // pega o id da pessoa, id_usuario é chave estrangeira
            $telefone->telefone = $request->t2;
            $telefone->descricao = $request->d2;
            
            $telefone->save();
          }
          if(!empty($request->t3)){
            $telefone = new Telefone;
            $telefone->id_usuario = $pessoa->id; // pega o id da pessoa, id_usuario é chave estrangeira
            $telefone->telefone = $request->t3;
            $telefone->descricao = $request->d3;
            
            $telefone->save();
          }  
          if(!empty($request->t4)){
            $telefone = new Telefone;
            $telefone->id_usuario = $pessoa->id; // pega o id da pessoa, id_usuario é chave estrangeira
            $telefone->telefone = $request->t4;
            $telefone->descricao = $request->d4;
            
            $telefone->save();
          } 
          if(!empty($request->t5)){
            $telefone = new Telefone;
            $telefone->id_usuario = $pessoa->id; // pega o id da pessoa, id_usuario é chave estrangeira
            $telefone->telefone = $request->t5;
            $telefone->descricao = $request->d5;
        
            $telefone->save();
          } 


        return redirect('/')->with('msg','Cadastrado!');

    }
}
