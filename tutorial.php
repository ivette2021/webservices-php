<?php

//HolaMundo
echo "Hola, PHP \n"; //\n salto de linea

//variable  // tipado dinamico
$my_string = "Esto es una cadena de texto";
$my_string = "Aqui cambio el valor de la cadena de texto";
echo $my_string . "\n"; //imprimio salto de linea
echo gettype($my_string) . "\n"; //imprimio string

$my_string = 6; //imprimio 6 int
echo $my_string . "\n"; //imprimio salto de linea
echo gettype($my_string) . "\n"; //imprime integer

$my_int = 7;
$my_int = $my_int + 4; //imprime 11
echo $my_int . "\n";
echo $my_int - 1 . "\n";
echo $my_int . "\n";
echo gettype($my_int) . "\n";

$my_double = 6.5;
echo $my_int + $my_double . "\n";
//echo gettype($my_double) + $my_string . "\n";//esto no se puede


$my_bool = true;
echo $my_bool = 1 . "\n";
$my_bool = false;
echo gettype($my_bool)  . "\n";

echo "El valor de mi integer es $my_int y el de mi boolean es $my_bool.\n";

//constantes usa Uppercase separado por guion bajo SIN EL $
const MY_CONSTANT = "Valor de la constante";
echo MY_CONSTANT . "\n";


//Listas 
$my_list = [$my_string, $my_int, $my_double, $my_bool];
echo gettype($my_array) . "\n";
echo $my_array[0] . "\n";
echo $my_array[3] . "\n";
array_push($my_array, $my_bool); //añadir datos a la lista
print_r($my_array);
//echo $my_array[4]  .  "\n";//Error

//Diccionario
$my_dict = array("string" => $my_string, "int" => $my_int, "bool" => $mybool);
echo gettype($my_dict) . "\n";
print_r($my_dict);
echo $my_dict["int"]  . "\n";

//Set 
array_push($my_array, "ivette");
array_push($my_array, "ivette");
print_r($my_array);
print_r(array_unique($my_array));

//flujos
for ($index = 0; $index < 10; $index++) {
    echo $index . "\n";
}

foreach ($my_array as $my_item) {
    echo $my_item . "\n";
}

$index = 0;
while ($index <= sizeof($my_array) - 1) {
    echo $my_array[$index] . "\n";
    $index++;
}

$my_int = 13;
$my_string = "Hola";

if ($my_int == 11 && $my_string ==  "Hola") {
    echo "El valor es 11\n";
} elseif ($my_int == 12 || $my_string == "Hola") {
    echo "El valor es 11 \n";
} else {
    echo "El valor no es 11\n";
}

//funciones 

function print_number(int $my_number)
{
    echo $my_number . "\n";
}

print_number(10.5);
print_number(11);
print_number(12);

class MyClass
{
    public $name;
    public $age;

    function  __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$my_class = new MyClass("Ivi", 2024);
print_r($my_class);
echo $my_class->name . "\n";
$my_class->name . "hola";
echo $my_class->name . "\n";
echo gettype($my_dict) . "\n";
