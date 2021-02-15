<?php
    include('fonction.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voyages</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php link_Bootstrap(); ?>
    <?php link_css(); ?>
</head>
<body>
	<?php link_menu(); ?>
	<div >
		<img src="images/voyages.jpg" class="bannerVoyages">
		<h3 class="positionVoyages"> Voyages </h3>
	</div>

<div  class="BarreRecherche">
	<div class="row">
      <div class="well">
      <h3 align="center">Recherche Avancée</h3>
        <form class="form-horizontal">
          <div class="form-group col-md-3 ">
            	<label for="Destination1" class="control-label">Destination</label>
           		<select class="form-control" name="Destination" id="location1">
             	 <option value="">Morocco</option>
            	  <option value="">France</option>
             	 <option value="">Caraïbes</option>
            	</select>
          </div>
          <div class="form-group col-md-3 ">
            	<label for="Navire1" class="control-label">Navire</label>
            	<select class="form-control" name="Navire" id="type1">
             	 <option value="">Paquebots, Megaship</option>
             	 <option value=""> Un Voilier </option>
            	 <option value=""> Croisière côtier </option>
           		</select>
          </div>
          <div class="form-group col-md-3 ">
            	<label for="Theme1" class="control-label">Thème</label>
            	<select class="form-control" name="Theme" id="type1">
             	 <option value="">St Valentin</option>
             	 <option value="">Fête nationale</option>
            	 <option value="">Été</option>
           		</select>
          </div>
          <div class="form-group col-md-3 ">
            	<label for="Date1" class="control-label">Date</label>
            	<input type="date" id="datenaissance" name="datenaissance" class="form-control">
          </div>
          <p class="text-center"><a href="#" class="btn btn-danger glyphicon glyphicon-search" role="button"></a></p>
        </form>
      </div>
	</div>
</div>

</body>
</html>