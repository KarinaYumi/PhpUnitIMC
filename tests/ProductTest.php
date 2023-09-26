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

        public function testProductSetPeso()
        {
            $p1 = new Product(47, 1.69, 16.5, "Normal");
            $p1->setPeso(50);
            $this->assertEquals(50, $p1->getPeso());
        }

        public function testProductAltura(){
            $p2 = new Product(47, 1.69, 16.5, "Normal");
            
            $this->assertEquals(1.69, $p2->getAltura());
        }

        public function testProductSetAltura()
        {
            $p2 = new Product(47, 1.69, 16.5, "Normal");
            $p2->setAltura(1.71);
            $this->assertEquals(1.71, $p2->getAltura());
        }
        
        public function testProductImc(){
            $p3 = new Product(47, 1.69, 16.5, "Normal");
            
            $this->assertEquals(16.5, $p3->getImc());
        }

        public function testProductSetImc()
        {
            $p3 = new Product(47, 1.69, 16.5, "Normal");
            $p3->setImc(17);
            $this->assertEquals(17, $p3->getImc());
        }

        public function testProductClassificacao(){
            $p4 = new Product(47, 1.69, 16.5, "Normal");
            
            $this->assertEquals("Normal", $p4->getClassificacao());
        }

        public function testProductSetClassificacao()
        {
            $p4 = new Product(47, 1.69, 16.5, "Normal");
            $p4->setClassificacao("Abaixo do peso");
            $this->assertEquals("Abaixo do peso", $p4->getClassificacao());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }
    }
?>
