<?php 

use App\Cart;
use PHPUnit\Framework\TestCase;



class CartTest  extends TestCase
{
    

    public function testCorrectNetPriceIsReturned()
    {
        $cart = new Cart();
        $cart->price = 10;
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(12,$netPrice);
    }


    /**
     * @test
     */
    public function the_cart_tax_value_can_be_changed()
    {
       Cart::$tax = 1.6;
       $cart = new Cart();
       $cart->price = 10;
       
       $netPrice = $cart->getNetPrice();

       $this->assertEquals(16,$netPrice);

       
    }

}
