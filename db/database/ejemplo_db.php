<?php
class EjemploDb
{
    private $hostDB = 'localhost';
    private $userDB = 'root';
    private $pwdDB = '';
    private $nameDB = 'ejemplo_db';
    private $conex;

    function __construct()
    {
        $this->conex = new mysqli(
            $this->hostDB,
            $this->userDB,
            $this->pwdDB,
            $this->nameDB
        );
    }

    function close(){
        $this->conex->close();
    }

    function validarConexion(){
        if($this->conex->connect_error){
            echo $this->conex->connect_error;
            return FALSE;
        }
        return TRUE;
    }

    function query($sql){
        if($this->validarConexion()){
            return $this->conex->query($sql);
        }
        return null;
    }
}
