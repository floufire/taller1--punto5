<?php
$salpicon=array("dulce1"=>"Banano", "dulce2"=>"Manzana", "dulce3"=>"Durazno", 
"acido1"=>"Piña", "acido2"=> "Naranja", "acido3"=> "Lulo");
echo("<br>");
echo("Arreglo de la ultima delicia de salpicon de la Jugosa S.A.S ");
echo("<br>");
echo("<br>");

foreach ($salpicon as $claves=>$valores) {
    echo($claves);
    echo(" --------------  ");
    echo($valores);
    echo("<br>");
}
?>
