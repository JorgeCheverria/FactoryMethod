<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 17/03/2021
 * Time: 0:34
 */

namespace Jcheverria\FactoryMethod;


abstract class PlanMovil
{

    private $telefono;

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public abstract function descripcionPaquete();
}