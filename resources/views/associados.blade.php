@extends('app')

@section('title', 'Associados')

@section('content')
    <p class="h1">Lista de Associados</p>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-dark">
                <thead>
                    <tr>
                        
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Pendencia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            @if ($cliente->status === "Pendente")
                                <td style="background-color:#FF0000">{{$cliente->name}}</td>
                                <td style="background-color:#FF0000" >{{$cliente->email}}</td>
                                <td style="background-color:#FF0000">{{$cliente->status}}</td>
                                <td>
                                    <a href="{{Route('limpar_nome/'.$cliente->id) }}">
                                        <button type="button" class="btn btn-success" onclick="limpar()">Devolvido</button>
                                    </a>
                                </td>
                            @else
                                <td>{{$cliente->name}}</td>
                                <td>{{$cliente->email}}</td>                            
                                <td>{{$cliente->status}}</td>
                            @endif
                            
                        </tr>
                    @endforeach                            
                </tbody>
            </table>
        </div>                
    </div>

    <script type="text/javascript">

     function limpar() {
        alert("Pendencia excluida.")
     }
    
    </script>

    
@endsection
