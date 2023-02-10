@extends('front.master.master-with-sidebar')

@section('title', 'O melhor Framework do Mundo')

@section('css')
    <style>
        .teste {
            color: purple;
        }
    </style>
@endsection

@section('js')
    <script>
        alert('Teste');
    </script>
@endsection

@section('sidebar')
    @parent
    <h1 class="teste">Listagem de Artigos</h1 class="teste">

    <ul>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nihil?</li>
        <li>Voluptatum dolores rerum rem ducimus quis provident similique iure voluptas.</li>
        <li>Libero quasi fugit maiores sed est dolores facere sint architecto.</li>
    </ul>
@endsection

@section('content')
    <h1>Conteúdo</h1>
@endsection
