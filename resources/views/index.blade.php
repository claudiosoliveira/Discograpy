@extends('layouts.app')
@section('body')
    <div id="divBusca">
        <input type="text" id="txtBusca"/>
        <button id="btnBusca">Pesquisar</button>
    </div>
    <div class="col-8 m-auto">
        <table class="table">
            <thead>
                
                <tr>
                    <th scope="col">Album:</th>
                    @foreach($faixa as $faixas)
                        @php
                            $album = $faixas->find($faixas->id)->relAlbums;
                        @endphp
                        <th scope="col">{{$album->nome}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Número</th>
                    <th scope="row">Faixa</th>
                    <th scope="row">Duração</th>
                </tr>
                @foreach($faixa as $faixas)
                    <tr>
                        <td>{{$faixas->numero}}</td>
                        <td>{{$faixas->nome}}</td>
                        <td>{{$faixas->duracao}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection