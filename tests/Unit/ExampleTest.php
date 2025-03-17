<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\Attributes\DataProvider;

class ExampleTest extends TestCase
{
    #[DataProvider('sumasProvider')]
    #[TestDox('Suma de dos números enteros')]
    #[Test]
    public function testBasicTest(/*int $expexted, int $num1, int $num2*/)
    {
        $num1 = 2;
        $num2 = 1;
        $this->assertSame(3, $num1+$num2);
        //$this->assertTrue(true);
    }

    public static function sumasProvider()
    {
        return [
            'prueba 1' => [3,2,1],
            'prueba 2' => [4,2,2],
        ];
    }
}
