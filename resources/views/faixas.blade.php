@extends('layouts.app')
@section('body')
    
    <div class="topo">
        {{-- <img src="" alt=""> --}}
        <h1>Discografia</h1>
    </div>
    <div class="principal">
        <p class="placeholder">Digite uma palavra chave</p>
        <div id="divBusca">
            <input type="text" id="txtBusca"/>
            <button id="btnBusca">Pesquisar</button>
        </div>
        <table class="table">
            <tbody class="teste">
                <tr>
                    <th scope="row">Número</th>
                    <th scope="row">Faixa</th>
                    <th scope="row">Duração</th>
                </tr>
                @foreach($faixas as $f)
                    <tr>
                        <td>{{$f->numero}}</td>
                        <td>{{$f->nome}}</td>
                        <td>{{$f->duracao}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection