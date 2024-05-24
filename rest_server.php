//php -S localhost:8000 rest_server.php  //levantar un servidor

//curl -d 'Hola a toods' http://localhost:8000

//----------------------------------------------------------------

<?php

$input = json_decode(
    file_get_contents('php://input'), true);

    $uri = $_SERVER['REQUEST_URI'];

$method = strtoupper($_SERVER['REQUEST_METHOD']);


try{
$db = new PDO('sqlite:db.sqlite');

}catch(PDOException $exception) {
    die($exception->getMessage());
}

switch ($method) {
    case 'GET':
        if (preg_match('|^/cars/?$|', $uri,$matches)) {
            $sql = 'SELECT id FROM cars';

            $ret=[];
            foreach ($db->query($sql)->fetchAll(PDO:FETCH_ASSOC) as $car) {
                $ret=[
                    '/cars/'.$car['id'],
            ];
        }
            echo json_encode($ret);
        }elseif (preg_match('|^/cars/(\d+)$|', $uri,$matches)) {
            $sql = 'SELECT * FROM cars WHERE id ='.matches[1];

            $car = $db->query($sql)->fetch(POD::FETCH_ASSOC);

            echo json_encoder($car);
        }
        break;
    case 'POST':
        if (preg_match('|^/cars/?$|',$uri,$matches)) {
            $sql="INSERT INTO cars(brand, model, year) VALUES('{$input[brand]}','{$input[brand]}',)";
        }
        break;
    case 'PATCH':
        break;
    case 'DELETE':
        break;
}

//SOAP 
$input = json._decode(file_get_contents())