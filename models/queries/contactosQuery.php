<?php

namespace App\models\queries;

class ContactosQuery
{

    static function all()
    {
        return "select * from contactos";
    }

    static function insert($contacto)
    {
        $nombre = $contacto->get('nombre');
        $telefono = $contacto->get('telefono');
        $email = $contacto->get('email');
        $sql = "insert into contactos (nombre,email,telefono) values ";
        $sql .= "('$nombre','$email','$telefono')";
        return $sql;
    }

    static function whereId($id)
    {
        return "select * from contactos where id=$id";
    }

    static function update($contacto)
    {
        $id = $contacto->get('id');
        $nombre = $contacto->get('nombre');
        $telefono = $contacto->get('telefono');
        $email = $contacto->get('email');
        $sql = "update contactos set ";
        $sql .= "nombre='$nombre',";
        $sql .= "telefono='$telefono',";
        $sql .= "email='$email' ";
        $sql .= " where id=$id";
        return $sql;
    }

    static function delete($contacto)
    {
        $id = $contacto->get('id');
        return "delete from contactos where id=$id";
    }
}
