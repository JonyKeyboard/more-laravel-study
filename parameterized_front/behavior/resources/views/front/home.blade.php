@extends('front.master.master')

@section('title', 'Seja bem-vindo')

@section('content')

    <div class="container">
        <div class="row py-4">

            <div class="col-12">
                Meu nome é: {{ $user->name }}
            </div>

        </div>

        <div class="row">
            <div class="col-6">
                @if (empty($user->email))
                    [IF] The user não informou e-mail
                @elseif ($user)
                    [ELSEIF] Existe um Objeto User
                @else
                    [ELSE] There is no user object
                @endif
                <br>
                @foreach ($courses as $course)
                    <p>{{ $course['name'] }}</p>
                @endforeach
            </div>
            <div class="col-6">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, est! Maiores nesciunt ullam ea id ad ipsa commodi voluptas, totam sequi ab, laboriosam natus quis repellat itaque, consequatur dolore vero.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @component('front.components.alert', ['type' => 'danger', 'datetime' => date('d/m/Y H:i:s')])
                    Mensagem de teste
                @endcomponent
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @alert(['type' => 'success', 'datetime' => date('d/m/Y H:i:s')])
                    Essa msg é do meu componente
                @endalert
            </div>
        </div>

    </div>

@endsection
