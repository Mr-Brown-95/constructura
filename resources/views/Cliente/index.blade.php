@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @if (session('message'))
                <div id="successAlert" class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="row">
            <h2>Lista de clientes</h2>

            <hr>
            <br>
            <p align="right">
            <div class="d-flex justify-content-between">

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAgregar">
                    Agregar
                </button>
                <button type="button" class="btn btn-secondary">
                    Regresar
                </button>
            </div>

            </p>

            {!! $tableHtml !!}
        </div>
    </div>
@endsection

<!-- Código JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        //Temporizador para alert messages
        var successAlert = $('#successAlert');

        if (successAlert.length > 0) {

            var timeout = 3000;

            setTimeout(function() {
                successAlert.fadeOut('slow');
            }, timeout);
        }

        // Parametros para el DataTable
        $('#example').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
            },
            "responsive": true,
            "dom": '<"col-xs-3"l><"col-xs-5"B><"col-xs-4"f>rtip',
            "buttons": [
                'copy', 'excel', 'pdf', 'print'
            ],
            "pageLength": 50,
            "order": [
                [0, "desc"]
            ],

        });

    });
</script>
