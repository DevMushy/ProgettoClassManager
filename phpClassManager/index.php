<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, GET, PUT, PATCH, DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$uri = ltrim($uri,"/");
$uri = ltrim($uri,"/");
$uri = explode("/",$uri);

switch($uri[1]){
    case 'class' :
        switch($method){
            case 'GET':
                
                if(count($uri) > 2){
                    $class_id = $uri[2];
                    require __DIR__.'/api/class/readByID.php';
                }else{
                    require __DIR__.'/api/class/read.php';
                }

                break;
                case 'POST':
                        require __DIR__.'/api/class/create.php';
                    break;
                case 'DELETE':
                        $class_id = $URI[2];
                        require __DIR__.'/api/class/delate.php';
                    break;
        }
    break;
    case 'studenti' :
        switch ($method) {
            case 'GET' :
                if( count($uri) > 2){
                    $studenti_id =$uri[2];
                    require __DIR__.'/api/class/readByID.php';
                }else{
                    require __DIR__.'/api/class/read.php';
                }

                break;
            case'POST':
                require __DIR__.'/api/class/create.php';
                break;
        }
    break;
    default:
}


echo $method . '<BR>';
echo $uri . '<BR>';
?>