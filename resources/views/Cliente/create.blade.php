@extends('layouts.app')
@section('content')
    <div style="display: flex; justify-content: center;">
        <h1>Agregar</h1>
    </div>
    <div class="card mx-auto" style="width: 25rem;">
        <div class="card-body ">
            <h5 class="card-title">Datos del cliente</h5>
            <form class="row g-3" action="/clientes" method="POST">
                @csrf
                <div class="col-12">
                    <label for="proyecto" class="form-label">Proyecto</label>
                    <input type="text" name="proyecto" class="form-control" id="proyecto" placeholder="Area 51"
                        tabindex="1" required>
                </div>
                <div class="col-md-12">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Esteban"
                        tabindex="2" required>
                </div>
                <div class="col-md-6">
                    <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                    <input type="text" name="apellido_paterno" class="form-control" id="apellido_paterno"
                        placeholder="Sanchez" tabindex="3" required>
                </div>
                <div class="col-6">
                    <label for="apellido_materno" class="form-label">Apellido Materno</label>
                    <input type="text" name="apellido_materno" class="form-control" id="apellido_materno"
                        placeholder="Miranda" tabindex="4" required>
                </div>
                <div class="col-12">
                    <label for="rfc" class="form-label">RFC</label>
                    <input type="text" name="rfc" class="form-control" id="rfc" placeholder="SAME900115"
                        tabindex="5" required>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email"
                        placeholder="ejemplo@correo.com" tabindex="6" required>
                </div>
                <div class="col-md-6">
                    <label for="dir_calle" class="form-label">Calle</label>
                    <input type="text" name="dir_calle" class="form-control" id="dir_calle"
                        placeholder="123 Calle Principal" tabindex="7" required>
                </div>
                <div class="col-md-3">
                    <label for="dir_numExt" class="form-label">Num Ext</label>
                    <input type="text" name="dir_numExt" class="form-control" id="dir_numExt" placeholder="456"
                        tabindex="8" required>
                </div>
                <div class="col-md-3">
                    <label for="dir_numInt" class="form-label">Num Int</label>
                    <input type="text" name="dir_numInt" class="form-control" id="dir_numInt" placeholder="789 B"
                        tabindex="9" required>
                </div>
                <div class="col-12">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="number" name="telefono" class="form-control" id="telefono" placeholder="987564321"
                        tabindex="10" required>
                </div>
                <div class="col-12">
                    <!-- Botton -->
                    <a href="/clientes" class="btn btn-secondary" tabindex="11">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="12">Guardar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
