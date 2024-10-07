<?php


namespace Tests\Core\Orders;
use PHPUnit\Framework\TestCase;
use Core\Orders\Customer;
/**
 * ClassNameTest
 * @group group
 */
class CustomerTest extends TestCase
{
    /** @test */
    public function testAttributes()
    {
        $customer = new Customer(
            name : 'Carlos Ferreira'
        );

        $this->assertEquals("Carlos Ferreira",$customer->getName());

        $customer->changeName(name : 'New name');

        $this->assertEquals("New name",$customer->getName());

        $customer->getName();

        $this->assertTrue(true);
    }

}
