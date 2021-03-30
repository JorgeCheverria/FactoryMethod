<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 17/03/2021
 * Time: 0:54
 */

namespace Jcheverria\FactoryMethod;


class PlanMovilFactory
{
    public function getPaquete($tipoPaquete)
    {
        if ($tipoPaquete == 'Basico') {
            return new PlanBasico;
        }

        if ($tipoPaquete == 'Regular') {
            return new PlanRegular;
        }

        if ($tipoPaquete == 'Ilimitado') {
            return new PlanIlimitado;
        }

        return null;
    }
}