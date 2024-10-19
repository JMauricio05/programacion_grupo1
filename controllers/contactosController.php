<?php
namespace App\controllers;

use App\models\entity\Contacto;

class ContactosController{
    function allContactos(){
        $contactos = Contacto::all();
        return $contactos;
    }

    function newContacto($datos){
        $contacto = new Contacto();
        $contacto->set('nombre', $datos['nombre']);
        $contacto->set('telefono', $datos['telefono']);
        $contacto->set('email', $datos['email']);
        return $contacto->save();
    }

    function getContacto($id){
        return Contacto::find($id);
    }

    function updateContacto($datos){
        $contacto = new Contacto();
        $contacto->set('id', $datos['cod']);
        $contacto->set('nombre', $datos['nombre']);
        $contacto->set('telefono', $datos['telefono']);
        $contacto->set('email', $datos['email']);
        return $contacto->update();
    }

    function deleteContacto($id){
        $contacto = new Contacto();
        $contacto->set('id', $id);
        return $contacto->delete();
    }
}