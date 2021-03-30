<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 17/03/2021
 * Time: 0:46
 */

namespace Jcheverria\FactoryMethod;


class PlanBasico extends PlanMovil
{
    public function descripcionPaquete()
    {
        return "---------- Plan basico activado ----------- 3 Gb 100 minutos a todas las operadoras No aplica redes sociales";
    }

}