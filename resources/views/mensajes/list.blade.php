@extends('layouts.base')

@section('content')
<h1>Mensajes</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Fecha</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Mensaje</th>
      </tr>
    </thead>
    <tbody>
        @foreach($mensajes as $mensaje)
            <tr>

                <th scope="row">{{ $mensaje->id }}</th>
                <td>{{ $mensaje->date }}</td>
                <td>{{ $mensaje->fromName }}</td>
                <td>{{ $mensaje->fromEmail }}</td>
                <td>{{ $mensaje->mensaje }}</td>

            </tr>
      @endforeach
    </tbody>
  </table>
@endsection
