<?php

include "DB.php";

function getAll(){
    $sql = "select * from ville";
    $db = getConnection();
    return $db->query($sql)->fetchAll();
}
function delete($id){}
function update($id, $nom, $latitude, $longitude){}
function persist($nom, $latitude, $longitude){
    $sql = "insert into ville
    values(null, '$nom', $latitude, $longitude)";
    $db = getConnection();
    
    return $db->exec($sql);
}

?>