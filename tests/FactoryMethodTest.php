<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 29/03/2021
 * Time: 22:22
 */

namespace Jcheverria\FactoryMethod\Tests;


use Jcheverria\FactoryMethod\PlanMovilFactory;

class FactoryMethodTest extends TestCase
{
    /**
     * @test
     * @covers
     */
    function factory_method_plans()
    {
        $tipoPaquete = 'Basico';
        $planBasico = 'Basico';
        $telefono = '0987839694';
        $resultado = '---------- Plan basico activado ----------- 3 Gb 100 minutos a todas las operadoras No aplica redes sociales';

        $descripcionPlan = new PlanMovilFactory();
        $descripcionPlan = $descripcionPlan->getPaquete($planBasico);
        $descripcionPlan->setTelefono($telefono);

        $planFinal = $descripcionPlan->descripcionPaquete();
        //echo $planFinal;
        $this->assertSame($resultado, $planFinal);
    }
}