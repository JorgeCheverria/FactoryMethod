<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 17/03/2021
 * Time: 1:01
 */

namespace Jcheverria\FactoryMethod;


class Cliente
{
    public function index()
    {
        $tipoPaquete = 'Basico';
        echo "-------";
        $descripcionPlan = PlanMovilFactory::getPaquete($tipoPaquete);
        $descripcionPlan->setTelefono('0987839694');
        $telefono = $descripcionPlan->getTelefono();
        echo "Su numero " . $telefono . " y tiene un paquete " . $descripcionPlan->descripcionPaquete;
    }
}