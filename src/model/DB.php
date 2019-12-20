<?php
function getConnection(){
    $mysqlhost='127.0.0.1';
    $mysqluser='root';
    $mysqlpassword='';
    $mysqldbname='gestionvillepdo';
    $dsn= "mysql:host=$mysqlhost;dbname=$mysqldbname";


    try{
        $db = new PDO($dsn, $mysqluser, $mysqlpassword);
    }catch(PDOException $e){
        die($e->getMessage());
    }
    return $db;
}

?>