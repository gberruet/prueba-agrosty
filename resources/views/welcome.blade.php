@extends('layouts.base')

@section('content')
<h1>Contacto</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col">
        <form action="/send-mail" method="post">
            @csrf
            @method('post')
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"><br>
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}"><br>
            <label for="asunto">Asunto</label>
            <select class="browser-default custom-select" name="subject" id="subject">
                <option value="">Seleccionar</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->desc }}</option>
                @endforeach
            </select><br><br>
            <label for="message">Mensaje</label>
            <textarea class="form-control" name="message" id="message" cols="30" rows="5">{{ old('message') }}</textarea><br>
            <button type="submit" class="btn btn-primary" id="send">Enviar</button>
        </form>
    </div>
</div>
@endsection
