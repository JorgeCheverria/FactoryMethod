<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 17/03/2021
 * Time: 0:51
 */

namespace Jcheverria\FactoryMethod;


class PlanIlimitado extends PlanMovil
{
    public function descripcionPaquete()
    {
        echo "---------- Plan ilimitado activado ----------- 50 Gb minutos ilimtados a todas las operadoras Eedes sociales ilimitadas";
    }
}