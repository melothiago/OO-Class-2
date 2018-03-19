<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            
            require_once 'Caneta.php';
            
            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("XYZ", "Verde", 2.0);
            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}" . "</br></br>";
            
            print_r($c2);
            
            
        ?>
        </pre>
    </body>
</html>
