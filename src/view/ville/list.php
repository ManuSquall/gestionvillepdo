<?php

include("../../../header.php");
?>
   

 <!-- Content Row -->

 <div class="row">

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Liste des villes</h6>
      <!-- <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
          <div class="dropdown-header">Dropdown Header:</div>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div> -->
    </div>
    <!-- Card Body -->
    <div class="card-body">
    <table class="table table-bordered table-striped">
        <tr>
            <th>Identifiant</th>
            <th>Nom</th>
            <th>Latitude</th>
            <th>Longitude</th>
        </tr>
        <?php
            include_once "../../model/villeDao.php";
            $villes= getAll();
            foreach($villes as $ville){
                echo " 
                <tr>
                    <td>$ville[0]</td>
                    <td>$ville[1]</td>
                    <td>$ville[2]</td>
                    <td>$ville[3]</td>
                </tr>
                
                ";
            }
        ?>
     </table>
    </div>
  </div>
</div>

<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Formulaire</h6>
      <!-- <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
          <div class="dropdown-header">Dropdown Header:</div>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div> -->
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <form action="http://localhost/projects/gestionvillepdo/VilleController" method="post">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input class="form-control" type="text" name="nom" id="nom">
            </div>
            
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input class="form-control" type="text" name="latitude" id="latitude">
            </div>
            
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input class="form-control" type="text" name="longitude" id="longitude">
            </div>
            
            <div class="form-group">
                <input class="btn btn-success" value="Envoyer" type="submit">
                <input class="btn btn-danger" value="Effacer" type="reset">
                
            </div>
        </form>
    </div>
  </div>
</div>
</div>

<!-- Content Row -->


<?php

include("../../../footer.php");

?>