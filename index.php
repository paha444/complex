<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="admin" />

	<title>Комплексные числа</title>
    
         <style>
             mfrac {
                display: inline-table;
                white-space: nowrap;
                border-collapse: collapse;
                text-align: center;
                vertical-align: middle;
                margin: 0 2px;
            }
            
            mfrac > :first-child {
                display: inline-table;
                vertical-align: text-bottom;
            }
            mfrac > * {
                line-height: 1.3em;
                font-size: 0.9em;
            }
            mfrac {
                white-space: nowrap;
                border-collapse: collapse;
                text-align: center;
            }
            
            .oms_formula, .oms_vector {
                font-family: MJI;
                font-size: 1.2em;
                display: inline;
            }
            
            mfrac > * + * {
                border-top: solid thin;
                display: table-row;
            }

            
        </style>
    
</head>

<body>


<?php

include_once('Complex.php');
                
try {

    //z1 = 3
    //z2 = 4
    //i = 60
    //i2 = 20
    $Complex = new Complex(3,4,60,20);
    
   
    $Complex->getPlus();
    $Complex->getMinus();
    $Complex->getTimes();
    $Complex->getDivided();
    
    
    
    
    


} catch (Exception $e) {
    echo 'Ошибка: ',  $e->getMessage(), "\n";
}














?>

</body>
</html>