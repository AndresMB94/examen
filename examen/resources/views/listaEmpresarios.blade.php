@extends('empresarios.template.main')

@section('title', 'Lista de Empresarios')

@section('tituloprincipal', 'Lista de Empresarios')

@section('nav')
    @include('empresarios.template.partials.nav')
@endsection

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Codigo</th>
                      <th scope="col">Razon Social</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Pais</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Ciudad</th>
                      <th scope="col">Telefono</th>
                      <th scope="col">Correo</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @for($i = 0; $i < count($empresarios); $i++)
                        <tr>
                          <th scope="row">{{ $empresarios[$i]["codigo"] }}</th>
                          <td>{{ $empresarios[$i]["razonsocial"] }}</td>
                          <td>{{ $empresarios[$i]["nombre"] }}</td>
                          <td>{{ $empresarios[$i]["pais"] }}</td>
                          <td>{{ $empresarios[$i]["estado"] }}</td>
                          <td>{{ $empresarios[$i]["ciudad"] }}</td>
                          <td>{{ $empresarios[$i]["telefono"] }}</td>
                          <td>{{ $empresarios[$i]["correo"] }}</td>
                          <td class="col text-center">
                            <button type="button" class="btn btn-success btn-sm">Editar</button>
                            <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
                          </td>
                        </tr>
                    @endfor                    
                  </tbody>
                </table>
                <div class="row">
                    <button class="btn btn-primary">Agregar Empresario</button>
                </div>
            </div>
        </div>
    </div>
@endsection