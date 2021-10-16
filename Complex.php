<?php

/**
 * @author admin
 * @copyright 2021
 */
 
//use PHPUnit\Framework\TestCase;
 

class Complex //extends TestCase
        {
            
            private $z1;
            private $z2;
            private $i;
            private $i2;

     
            function __construct($z1 = 3, $z2 = 4, $i = 60, $i2 = 20)
            {
                
                if(!is_numeric($z1) or !is_numeric($z2) or !is_numeric($i) or !is_numeric($i2)) throw new Exception('Только числа');
                
                $this->z1 = $z1;
                $this->z2 = $z2;
                $this->i  = $i;
                $this->i2 = $i2;
            
                
            }
 
 
 
    
            private function Plus(): string
            {
                $z1 = $this->z1;
                $z2 = $this->z2;
                $i = $this->i;
                $i2 = $this->i2;
                

                $result = $z1." + ".$i."i"." + ".$z2." + ".$i2." = (".$z1." + ".$z2.") + (".$i." + ".$i2.")i = ".($z1+$z2)." + ".($i+$i2)."i";
                $result = '<h2>Сложение</h2><div class="plus">'.$result.'</div>';
                return $result;
                

            }
     
            private function Minus(): string
            {

                $z1 = $this->z1;
                $z2 = $this->z2;
                $i = $this->i;
                $i2 = $this->i2;
                
               
                $result = $z1." + ".$i."i"." - (".$z2." + ".$i2.") = (".$z1." - ".$z2.") + (".$i." - ".$i2.")i = ".($z1-$z2)." + ".($i-$i2)."i";
                $result = '<h2>Вычетание</h2><div class="minus">'.$result.'</div>';
                return $result;                
                
            }
     
            private function Times(): string // Умножение
            {

                $z1 = $this->z1;
                $z2 = $this->z2;
                $i = $this->i;
                $i2 = $this->i2;
                

                $result = '<div style="padding:0 0.25em;">
                
                            ('.$z1.'&nbsp;+&nbsp;'.$i.'<span class="oms_formula">i</span>)
                            &nbsp;·&nbsp;('.$z2.'&nbsp;+&nbsp;20<span class="oms_formula">i</span>)
                            &nbsp;=&nbsp;'.$z1.'·'.$z2.'&nbsp;+&nbsp;'.$z1.'·'.$i2.'<span class="oms_formula">i</span>
                            &nbsp;+&nbsp;'.$i.'·'.$z2.'<span class="oms_formula">i</span>
                            &nbsp;+&nbsp;'.$i.'·'.$i2.'<span class="oms_formula">i</span><sup>2</sup>
                            &nbsp;=&nbsp;'.($z1*$z2).'&nbsp;+&nbsp;'.$i.'<span class="oms_formula">i</span>
                            &nbsp;+&nbsp;'.($i*$z2).'<span class="oms_formula">i</span>
                            &nbsp;-&nbsp;'.($i*$i2).'&nbsp;=&nbsp;'.(($z1*$z2)-($i*$i2)).'
                            &nbsp;+&nbsp;'.(($z1*$i2)+($i*$z2)).'<span class="oms_formula">i</span>
                        
                          </div>';

                $result = '<h2>Умножение</h2><div class="times">'.$result.'</div>';
                
                return $result;                
                
            }
     
            private function Divided(): string // Деление
            {

                $z1 = $this->z1;
                $z2 = $this->z2;
                $i = $this->i;
                $i2 = $this->i2;


                $result = '<div style="padding:0 0.25em;">
                
                            <mfrac>
                                <mn>'.$z1.'&nbsp;+&nbsp;'.$i.'<span class="oms_formula">i</span></mn>
                                <mn>'.$z2.'&nbsp;+&nbsp;'.$i2.'<span class="oms_formula">i</span></mn>
                            </mfrac>&nbsp;=&nbsp;
                            <mfrac>
                                <mn>('.$z1.'&nbsp;+&nbsp;'.$i.'<span class="oms_formula">i</span>)('.$z2.'&nbsp;-&nbsp;'.$i2.'<span class="oms_formula">i</span>)</mn>
                                <mn>('.$z2.'&nbsp;+&nbsp;'.$i2.'<span class="oms_formula">i</span>)('.$z2.'&nbsp;-&nbsp;'.$i2.'<span class="oms_formula">i</span>)</mn>
                            </mfrac> = 
                            <mfrac>
                                <mn>'.$z1.'·'.$z2.'&nbsp;-&nbsp;'.$z1.'·'.$i2.'<span class="oms_formula">i</span>&nbsp;+&nbsp;'.$i.'·'.$z2.'<span class="oms_formula">i</span>&nbsp;-&nbsp;'.$i.'·'.$i2.'<span class="oms_formula">i</span><sup>2</sup></mn>
                                <mn>'.$z2.'·'.$z2.'&nbsp;+&nbsp;'.$i2.'·'.$i2.'</mn>
                            </mfrac> = 
                            <mfrac>
                                <mn>'.($z1*$z2).'&nbsp;-&nbsp;'.($z1*$i2).'<span class="oms_formula">i</span>&nbsp;+&nbsp;'.($i*$z2).'<span class="oms_formula">i</span>&nbsp;+&nbsp;'.($i*$i2).'</mn>
                                <mn>'.($z2*$z2).'&nbsp;+&nbsp;'.($i2*$i2).'</mn></mfrac> = <mfrac>
                                <mn>'.(($i*$i2)+($z1*$z2)).'&nbsp;+&nbsp;'.(($i*$z2)-($z1*$i2)).'<span class="oms_formula">i</span></mn>
                                <mn>'.(($z2*$z2)+($i2*$i2)).'</mn>
                            </mfrac> = 

                            <span class="oms_formula">i</span> ≈ '.((($i*$i2)+($z1*$z2))/(($z2*$z2)+($i2*$i2))).'&nbsp;+&nbsp;'.((($i*$z2)-($z1*$i2))/(($z2*$z2)+($i2*$i2))).'<span class="oms_formula">i</span>
                       
                        </div>';

                $result = '<h2>Деление</h2><div class="divided">'.$result.'</div>';
                
                return $result;
                 
            }



            public function getPlus() 
            {
                echo $this->Plus();
            }
            public function getMinus() 
            {
                echo $this->Minus();
            }
            public function getTimes() 
            {
                echo $this->Times();
            }
            public function getDivided() 
            {
                echo $this->Divided();
            }
            




            //public function testPlus(){
                //$this->assertSame(
                //    [$this->Plus()],
                //    []
                //);               
            //}




        
        
        }
     


                



?>