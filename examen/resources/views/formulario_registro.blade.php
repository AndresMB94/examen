@extends('empresarios.template.main')

@section('title', 'Registro de Empresarios')

@section('tituloprincipal', 'Registro de Empresarios')

@section('nav')
    @include('empresarios.template.partials.nav')
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="post" action="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="codigo">Codigo</label>
                    <input type="number" class="form-control" id="codigo" name="codigo" required>
                </div>
                <div class="form-group">
                    <label for="razon">Razon Social</label>
                    <input type="text" class="form-control" id="razon" name= "razon" placeholder="Razon Social" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name= "nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <label for="pais">Pais</label>
                    <input type="text" class="form-control" id="pais" name="pais" placeholder="Pais" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required>
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="number" class="form-control" id="telefono" name="telefono" required>
                </div>
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection