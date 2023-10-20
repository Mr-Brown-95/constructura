@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
@endsection

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

    @include('Cliente.modal.create-modal')

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js "></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>



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
                "dom": '<"col-xs-3"l><"col-xs-5"B><"col-xs-4"f>rtip',
                "buttons": [
                    'excel', 'pdf', 'print', 'copy'
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                },
                "pageLength": 10,
                "order": [
                    [0, "desc"]
                ],
                "responsive": true
            });

        });
    </script>
@endsection

@endsection
