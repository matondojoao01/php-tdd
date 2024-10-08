<?php


namespace Tests\Core\Orders;

use PHPUnit\Framework\TestCase;
use Core\Orders\Product;

/**
 * ClassNameTest
 * @group group
 */
class ProductUnitTest extends TestCase
{
    public function test_clc()
    {
        $product = new Product(
            name: 'Product 1',
            price: 10,
            total: 12
        );

        $this->assertEquals(120, $product->total());
        $this->assertEquals(132, $product->totalWithTax10());

        $this->assertTrue(true);
    }
    public function test_clc_with_tax()
    {
        $product = new Product(
            name: 'Product 2',
            price: 10,
            total: 12
        );

        $product->totalWithTax(35);

        $this->assertTrue(true);
    }
}
