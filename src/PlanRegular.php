<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 17/03/2021
 * Time: 0:51
 */

namespace Jcheverria\FactoryMethod;


class PlanRegular extends PlanMovil
{
    public function descripcionPaquete()
    {
        echo "---------- Plan basico activado ----------- 5 Gb 500 minutos a todas las operadoras 1 GB Facebook y Whatsapp";
    }
}