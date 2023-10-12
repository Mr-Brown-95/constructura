<!-- Modal Editar Cliente -->
<div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-labelledby="{{ $modalId }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $modalId }}Label">Editar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para editar cliente -->
                <div class="card mx-auto" style="width: 25rem;">
                    <div class="card-body ">
                        <h5 class="card-title">Datos del cliente</h5>
                        <form class="row g-3" action="/clientes/{{ $cliente->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label for="proyecto" class="form-label">Proyecto</label>
                                <input type="text" name="proyecto" class="form-control" id="proyecto"
                                    value="{{ $cliente->proyecto }}" tabindex="1" required>
                            </div>
                            <div class="col-md-12">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre"
                                    value="{{ $cliente->nombre }}" tabindex="2" required>
                            </div>
                            <div class="col-md-6">
                                <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                                <input type="text" name="apellido_paterno" class="form-control" id="apellido_paterno"
                                    value="{{ $cliente->apellido_paterno }}" tabindex="3" required>
                            </div>
                            <div class="col-6">
                                <label for="apellido_materno" class="form-label">Apellido Materno</label>
                                <input type="text" name="apellido_materno" class="form-control" id="apellido_materno"
                                    value="{{ $cliente->apellido_materno }}" tabindex="4" required>
                            </div>
                            <div class="col-12">
                                <label for="rfc" class="form-label">RFC</label>
                                <input type="text" name="rfc" class="form-control" id="rfc"
                                    value="{{ $cliente->rfc }}" tabindex="5" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="email"
                                    value="{{ $cliente->email }}" tabindex="6" required>
                            </div>
                            <div class="col-md-6">
                                <label for="dir_calle" class="form-label">Calle</label>
                                <input type="text" name="dir_calle" class="form-control" id="dir_calle"
                                    value="{{ $cliente->dir_calle }}Principal" tabindex="7" required>
                            </div>
                            <div class="col-md-3">
                                <label for="dir_numExt" class="form-label">Num Ext</label>
                                <input type="text" name="dir_numExt" class="form-control" id="dir_numExt"
                                    value="{{ $cliente->dir_numExt }}" tabindex="8" required>
                            </div>
                            <div class="col-md-3">
                                <label for="dir_numInt" class="form-label">Num Int</label>
                                <input type="text" name="dir_numInt" class="form-control" id="dir_numInt"
                                    value="{{ $cliente->dir_numInt }}" tabindex="9" required>
                            </div>
                            <div class="col-12">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" name="telefono" class="form-control" id="telefono"
                                    value="{{ $cliente->telefono }}" tabindex="10" required>
                            </div>
                            <div class="col-12">
                                <!-- Botón -->
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary" tabindex="12">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
