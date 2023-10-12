<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();

        $tableHtml = $this->generateTableHtml($clientes);

        return view('cliente.index', ['tableHtml' => $tableHtml]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new cliente();
        $cliente->proyecto = $request->get('proyecto');
        $cliente->nombre = $request->get('nombre');
        $cliente->apellido_paterno = $request->get('apellido_paterno');
        $cliente->apellido_materno = $request->get('apellido_materno');
        $cliente->rfc = $request->get('rfc');
        $cliente->email = $request->get('email');
        $cliente->dir_calle = $request->get('dir_calle');
        $cliente->dir_numExt = $request->get('dir_numExt');
        $cliente->dir_numInt = $request->get('dir_numInt');
        $cliente->telefono = $request->get('telefono');
        $cliente->save();

        return redirect('/clientes')->with('message', 'Cliente creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente', $cliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);

        $cliente->proyecto = $request->get('proyecto');
        $cliente->nombre = $request->get('nombre');
        $cliente->apellido_paterno = $request->get('apellido_paterno');
        $cliente->apellido_materno = $request->get('apellido_materno');
        $cliente->rfc = $request->get('rfc');
        $cliente->email = $request->get('email');
        $cliente->dir_calle = $request->get('dir_calle');
        $cliente->dir_numExt = $request->get('dir_numExt');
        $cliente->dir_numInt = $request->get('dir_numInt');
        $cliente->telefono = $request->get('telefono');
        $cliente->save();

        return redirect('/clientes')->with('message', 'Cliente editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect('/clientes')->with('message', 'Cliente eliminado exitosamente');
    }

    private function generateTableHtml($clientes)
    {
        $html = '<table id="example" class="table table-striped table-bordered" style="width:100%">';
        $html .= '<thead>';
        $html .= '<tr>';
        $html .= '<th>Proyecto</th>';
        $html .= '<th>Nombre</th>';
        $html .= '<th>Apellido Paterno</th>';
        $html .= '<th>Apellido Materno</th>';
        $html .= '<th>RFC</th>';
        $html .= '<th>Email</th>';
        $html .= '<th>Calle</th>';
        $html .= '<th>Numero exterior</th>';
        $html .= '<th>Numero interior</th>';
        $html .= '<th>Telefono</th>';
        $html .= '<th>Acciones</th>';
        $html .= '</tr>';
        $html .= '</thead>';
        $html .= '<tbody>';

        foreach ($clientes as $cliente) {
            $html .= '<tr>';
            $html .= '<td>' . $cliente->proyecto . '</td>';
            $html .= '<td>' . $cliente->nombre . '</td>';
            $html .= '<td>' . $cliente->apellido_paterno . '</td>';
            $html .= '<td>' . $cliente->apellido_materno . '</td>';
            $html .= '<td>' . $cliente->rfc . '</td>';
            $html .= '<td>' . $cliente->email . '</td>';
            $html .= '<td>' . $cliente->dir_calle . '</td>';
            $html .= '<td>' . $cliente->dir_numExt . '</td>';
            $html .= '<td>' . $cliente->dir_numInt . '</td>';
            $html .= '<td>' . $cliente->telefono . '</td>';
            $html .= '<td>';

            // Agrega botones para abrir los modales de edición y eliminación
            $html .= '<button type="button" class="btn btn-warning mt-2" data-bs-toggle="modal" data-bs-target="#editModal' . $cliente->id . '">Editar</button>';
            $html .= '<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal' . $cliente->id . '">Eliminar</button>';

            $html .= '</td>';
            $html .= '</tr>';

            // Agrega los modales de edición y eliminación
            $html .= view('cliente.modal.edit-modal', ['cliente' => $cliente, 'modalId' => 'editModal' . $cliente->id])->render();
            $html .= view('cliente.modal.delete-modal', ['cliente' => $cliente, 'modalId' => 'deleteModal' . $cliente->id])->render();
        }

        $html .= '</tbody>';
        $html .= '</table>';

        return $html;
    }
}
