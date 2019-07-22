<?php
namespace App\Http\Controllers;
use illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller{
    
    public function cadastrarAluno(Request $request){
        if($request->isMethod('GET')){
            return view("cadastroAluno");
        }
        $novoAluno = new Aluno();
        $novoAluno->nome = $request->nome;
        $novoAluno->cpf = $request->cpf;
        $resultado = $novoAluno->save();

        if($resultado){
            return view('sucesso', ['erro'=>false, 'aluno'=>$novoAluno]);
        }else{
            return view('sucesso', ['erro'=>true, 'aluno'=>$novoAluno]);
        } 


        return view('sucesso', [
            "nome"=> $request->nome,
            "sobrenome"=> $request->sobrenome
        ]);

    }
    public function todosAlunos (Request $request){
        if($request->isMethod('GET')){
            $resultado = Aluno::all();
        
        if($resultado){
            return view('todosAlunos',['resultado'=>$resultado]);
        }else{
        
        }
        }
    }

    public function deletarAluno(Request $request, $id){
        $alunos = Aluno::find($id);
        $alunos->delete();

        return redirect("/aluno/todosAlunos");
    }
}