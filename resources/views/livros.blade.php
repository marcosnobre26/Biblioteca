@extends('app')

@section('title', 'Livros')

@section('content')
    <p class="h1">Lista de Livros Cadastrados</p>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-dark">
                <thead>
                    <tr>
                        
                        <th scope="col">Titulo</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livros as $livro)
                        <tr>
                            
                            <td>{{$livro->titulo}}</td>
                            <td>{{$livro->autor}}</td>
                            <td>{{$livro->status}}</td>
                        </tr>
                    @endforeach                            
                </tbody>
            </table>
        </div>                
    </div>
    <a href="{{ url('formulario-livro') }}">
        <button type="button" class="btn btn-dark">Cadastrar Livro</button>
    </a>
@endsection
