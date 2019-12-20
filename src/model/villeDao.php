<?php

function getAll(){}
function delete($id){}
function update($id, $nom, $latitude, $longitude){}
function persist($nom, $latitude, $longitude){
    $sql = "insert into ville
    values(null, '$nom', $latitude, $longitude)";
    $db = getConnection();
    
    return $db->exec($sql);
}

?>