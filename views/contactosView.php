<?php

namespace App\views;

use App\controllers\ContactosController;

class ContactosView
{

    private $contactosController;

    function __construct()
    {
        $this->contactosController = new ContactosController();
    }

    function tablaContactos()
    {
        $rows = '';
        $contactos = $this->contactosController->allContactos();
        if (count($contactos) > 0) {
            foreach ($contactos as $contacto) {
                $id = $contacto->get('id');
                $rows .= '<tr>';
                $rows .= '  <td>' . $contacto->get('nombre') . '</td>';
                $rows .= '  <td>' . $contacto->get('email') . '</td>';
                $rows .= '  <td>' . $contacto->get('telefono') . '</td>';
                $rows .= '  <td>';
                $rows .= '      <a href="formularioContacto.php?cod=' . $id . '">Modificar</a>';
                $rows .= '  </td>';
                $rows .= '  <td>';
                $rows .= '      <button onClick="onDeleteContacto(' . $id . ')">Eliminar</button>';
                $rows .= '  </td>';
                $rows .= '</tr>';
            }
        } else {
            $rows .= '<tr>';
            $rows .= '  <td colspan="3">No hay datos</td>';
            $rows .= '</tr>';
        }
        $table = '<table>';
        $table .= ' <thead>';
        $table .= '     <tr>';
        $table .= '         <th>Nombre</th>';
        $table .= '         <th>Email</th>';
        $table .= '         <th>Teléfono</th>';
        $table .= '     </tr>';
        $table .= ' </thead>';
        $table .= ' <tbody>';
        $table .= $rows;
        $table .= ' </tbody>';
        $table .= '</table>';
        return $table;
    }

    function getMsgConfirmarContacto($datosFormulario)
    {
        $datosGuardados = empty($datosFormulario['cod'])
            ? $this->contactosController->newContacto($datosFormulario)
            : $this->contactosController->updateContacto($datosFormulario);
        if ($datosGuardados) {
            return '<P>Datos del contacto guardados</P>';
        } else {
            return '<P>No se pudo guardar los datos del contacto</P>';
        }
    }

    function getMsgEliminarContacto($id)
    {
        $datoEliminado = $this->contactosController->deleteContacto($id);
        if ($datoEliminado) {
            return '<P>Datos del contacto borrados</P>';
        } else {
            return '<P>No se pudo borrar los datos del contacto</P>';
        }
    }
}
