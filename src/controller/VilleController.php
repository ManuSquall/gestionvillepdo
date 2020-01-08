<?php

$nom = $_POST["nom"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];

require_once "../model/VilleDao.php";

$result = persist($nom, $latitude, $longitude);

header("location:http://localhost/projects/gestionvillepdo/src/view/ville/list.php");

?>