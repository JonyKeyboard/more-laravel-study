@extends('template.master.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">

                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach

                <form action="{{ route('course.store') }}" method="post" autocomplete="off">
                    @csrf

                    <div class="form-control">
                        <div class="mb-3">
                            <label for="name">Curso:</label>
                            <input type="text" id="name" name="name" class="form-control {{ ($errors->has('name') ? 'is-invalid' : '') }}" placeholder="Insira o nome do curso" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="tutor">Tutor:</label>
                            <input type="text" id="tutor" name="tutor" class="form-control {{ ($errors->has('tutor') ? 'is-invalid' : '') }}" placeholder="Insira o nome do tutor do curso"  value="{{ old('tutor') }}">
                            @if ($errors->has('tutor'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tutor')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" class="form-control {{ ($errors->has('email') ? 'is-invalid' : '') }}" placeholder="Insira o e-mail do tutor" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="">
                            <button class="btn btn-primary" type="submit">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
