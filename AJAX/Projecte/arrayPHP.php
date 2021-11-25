<?php
// Array with names
/*$cases = array(

    "Casa Lina" => "Manacor",
    "Son Sis" => "Artà",
    "Can Roca" => "Petra",
    "Villa Playa" => "Llucmajor",
    "Sa Cova" => "Palma"

); */

$cases = array("Casa Lina", "Son Sis", "Can Roca", "Villa Playa", "Sa Cova");

//Rebem el valor de l'imput text de llistaCases.html
$escrit = $_REQUEST["input"];
//Passa el text a minuscules
$escrit = strtolower($escrit);
//Per obtenir la longitut de l'String
$long=strlen($escrit);
//Declaram variable almacenadora
$coincidencies = "";


// Mira totes les coincidencies de $escrit amb l'array sempre que $escrit no estigui buit (CAP VALOR A L'IMPUT TEXT)
if ($escrit !== "") {

    //Recorrem array cases amb un bucle foreach
    foreach($cases as $nom) {
        
        //Funcio que cerca si apareix l'string (Similar a indexOf)
        if (stristr($escrit, substr($nom, 0, $long))) {


            if ($coincidencies === "") {

                $coincidencies = $nom;

            } else {

                $coincidencies .= ", $nom";
            }
        }
    }
}


//Retorna $coincidencies al ResponseText
echo $coincidencies === "" ? "no suggestion" : $coincidencies;
?>