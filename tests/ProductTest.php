<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Product;

    class ProductTest extends TestCase
    {
        
        public function testProductPeso()
        {
            $p1 = new Product(47, 1.69, 16.5, "Normal");

            $this->assertEquals(47, $p1->getPeso());
        }

        public function testProductAltura(){
            $p2 = new Product(47, 1.69, 16.5, "Normal");
            
            $this->assertEquals(1.69, $p2->getAltura());
        }

        public function testProductImc(){
            $p2 = new Product(47, 1.69, 16.5, "Normal");
            
            $this->assertEquals(16.5, $p2->getImc());
        }

        public function testProductClassificacao(){
            $p2 = new Product(47, 1.69, 16.5, "Normal");
            
            $this->assertEquals("Normal", $p2->getClassificacao());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }
    }
?>