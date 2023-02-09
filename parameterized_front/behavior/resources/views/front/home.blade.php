Meu nome é: {{ $user->name }}
<br>
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

    @php
        echo '<pre>';
            var_dump($loop);
        echo '</pre>';
    @endphp

@endforeach
