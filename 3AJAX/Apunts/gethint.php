<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {

    //Passa el text a minuscules
    $q = strtolower($q);
    //Per obtenir la longitut de l'String
    $len=strlen($q);

    //Recorrem array anterior amb foreach
    foreach($a as $name) {

        //Funcio que cerca si apareix l'string (Similar a indexOf)
        if (stristr($q, substr($name, 0, $len))) {


            if ($hint === "") {

                $hint = $name;

            } else {

                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
//Operador Condicional (Condicio ? True : False )
echo $hint === "" ? "no suggestion" : $hint;
?>