<?php 
require 'Construct.php'
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<title> Le B-C C R</title>
	</head>

	<body>
		<div class="container-fluid">	
			<div class="row">
			
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
<!--           <ul class="nav nav-pills flex-column">
	<div class="titre">
			<h1>B-C c r</h1>
			</div>	
  <li class="nav-item">
    <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Reports</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Analytics</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Export</a>
  </li>
</ul> -->
<ul class="nav nav-pills flex-column">
       <!--      <li class="nav-item">
         <a class="nav-link" href="#">Nav item</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">Nav item again</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">One more nav</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">Another nav item</a>
       </li>
                 </ul>
       
                 <ul class="nav nav-pills flex-column">
       <li class="nav-item">
         <a class="nav-link" href="#">Nav item again</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">One more nav</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">Another nav item</a>
       </li>
                 </ul> -->
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Stat BC</h1>

          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail" width="200" height="200">
              <h4>Pages</h4>
              <div class="text-muted">Something else</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail" width="200" height="200">
              <h4>Articles</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail" width="200" height="200">
              <h4>Prix > 100</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail" width="200" height="200">
              <h4>prix < 100</h4>
              <span class="text-muted">Something else</span>
            </div>
           </section>
        </main>
    </div>
	</div>
	<?php
		$Construct  = new Extracteur();
		$Construct->param("chameau",0,1);
		$recherche = $Construct->getRecherche();
		$recherche = $Construct->nmbp();
		$extract = $Construct->cherche();
		var_dump($Construct->nomine);
	?>
	 
	</body>	
</html>		


