
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obtener la Fecha Actual con Angular JS">
    <meta name="author" content="Collective Cloud Peru">

    <title>Obtener la Fecha Actual con Angular JS</title>
	<script src= "https://code.angularjs.org/1.4.3/angular.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/css.css">

	<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>

	<div class="container">		

		<h1 class="text-center">Obtener la Fecha Actual con Angular JS</h1>		    

			<div class="form-group">			    	        
			    <div class="row">

				    <div class="col-md-12">

                        <div ng-app="miAplicacion" ng-controller="fechaController" align="center">
                            <h2>La Fecha actual es:</h2>
                            <span id ="fecha">{{CurrentDate | date:'dd-MM-yyyy'}}</span>
                        </div>

				    </div>

			    </div>			    	
			</div>		    

		</form>

	</div>

	<br>

	<footer>
      <div class="container text-center">
        <p class="text-muted credit">
          Desarrollado por <a href="http://www.collectivecloudperu.com" target="blank">Collective Cloud Peru</a>
        </p>
      </div>        
    </footer>

</body>
</html>