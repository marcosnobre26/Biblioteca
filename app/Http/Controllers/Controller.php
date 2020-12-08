<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function formulario_usuario()
    {
        return view('formulario-usuarios');
    }

    public function formulario_livro()
    {
        return view('formulario-livros');
    }

    public function cadastrar_usuario(Request $request)
    {
        DB::table('users')->insert(
            ['name'=> $request->input('name'),
            'email' => $request->input('email'),
            'senha' => $request->input('senha'),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone')]
        );

        return redirect()->route('livros');
    }

    public function cadastrar_livro(Request $request)
    {
        DB::table('livros')->insert(
            ['titulo'=> $request->input('titulo'),
            'autor' => $request->input('autor'),
            'status' => $request->input('status')]
        );

        return redirect()->route('livros');
    }

    public function livros()
    {
        $livros = DB::table('livros')->get();
        return view('livros', ['livros' =>$livros]);
    }

    public function limpar_nome(Request $request)
    {
        $cliente = DB::table('cliente')
              ->where('id', 1)
              ->update(['status' => 'Em dia']);
        return redirect()->route('livros');
    }

    public function associados()
    {
        $clientes = DB::table('cliente')
            ->join('users', 'cliente.users_id', '=', 'users.id')
            ->select('name', 'status', 'email')
            ->get();
        return view('associados', ['clientes' =>$clientes]);
        //dd($clientes);
    }

    public function home()
    {
        return view('app');
    }
}
