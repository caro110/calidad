<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
$consumer = new Dummy();
$consumer->setNombre('Carolina');
$consumer->setApellido('Pino');
$result = $consumer->nombreCompleto();
$this->assertEquals('Carolina Pino', $result);
    }

    /**
    * Probar email válido
    */
    public function testEmail()
    {

    }
}
