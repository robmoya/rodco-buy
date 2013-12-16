<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TABLET RODCO Compras</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="row">
		<nav class="navbar navbar-default col-md-12 col-sm-12" role="navigation">
			<div class="navbar-header col-md-4 col-sm-4">
  				<a class="navbar-brand" href="#">RODCO Mayorista</a>
  			</div>
			<form class="navbar-form navbar-right form-inline col-md-8 col-sm-8" role="search">
				<div class="form-group col-md-6 col-sm-6">
					<label for="" class=" text-right"><span class="glyphicon glyphicon-earphone"></span> Tel</label>
					<div class="">
						<input type="text" class="form-control input-lg" placeholder="0000-00-00">
					</div>
				</div>
				<div class="form-group col-md-6 col-sm-6">
					<label for="" class="text-right"><span class="glyphicon glyphicon-phone"></span> Pin</label>
					<div class="">
						<input type="text" class="form-control input-lg" placeholder="Ej: 4367">
					</div>
				</div>
			</form>
		</nav>
	</div>

	<div class="row">
		<header class="col-md-12 text-center">
			<div class="row">
				<h2>SELECCIONE LOS <span class="text-primary">PRODUCTOS</span> QUE DESEA.</h2>
			</div>
			<div class="row page-header">
				<form class="form-inline col-md-12 col-sm-12" role="search">
					<div class="form-group col-md-4 col-md-offset-2 col-sm-6">
						<label class="col-md-3 col-sm-3">Buscar</label>
						<div class="col-md-9 col-sm-9">
    						<input type="text" class="form-control input-lg" name="" placeholder="Nombre">
    					</div>
					</div>
					<div class="form-group col-md-4 col-sm-6">
						<label class="col-md-3 col-sm-3">Dpto</label>
						<div class="btn-group col-md-9 col-sm-9">
						  <button type="button" class="btn btn-default btn-lg btn-block dropdown-toggle" data-toggle="dropdown">
						    TODOS <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" role="menu">
						   	<li><a href="#">Candados</a></li>
						   	<li><a href="#">Metales</a></li>
						   	<li><a href="#">Remate</a></li>
						   	<li><a href="#">Cerraduras</a></li>
						   	<li><a href="#">Ferretería</a></li>
						   	<li><a href="#">Eléctrico</a></li>
						   	<li><a href="#">Coflex</a></li>
						   	<li><a href="#">Plywood</a></li>
						  </ul>
						</div>
					</div>				
				</form>
			</div>
		</header>
	</div>	

	<div class="row">
		<section class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

			<div class="col-md-8">

				<div class="row">
					<article class="product col-md-12">
						
						<div class="col-md-12">
							<a href="" class="btn btn-default btn-block">
								<h4 class="col-md-12 text-left">CANDADOS YALE 11840 VISUAL BLISTER</h4>
								<h4 class="col-md-12"> 
									<span class="pull-left">Precio:</span>
									<span class="text-primary">Disponibles:67</span>
									<span class="pull-right">Descuento:3%</span>
								</h4>
							</a>
							<div class="progress">
							  <div class="progress-bar progress-bar-primary"  role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%">
							    <span class="sr-only">67% Complete</span>
							  </div>
							</div>
						</div>
					</article><!-- Un Producto -->
				</div>

				<br>

				<div class="row">
					<article class="product col-md-12">
						
						<div class="col-md-12">
							<a href="" class="btn btn-default btn-block">
								<h4 class="col-md-12 text-left">CANDADOS YALE 11840 VISUAL BLISTER</h4>
								<h4 class="col-md-12"> 
									<span class="pull-left">Precio:</span>
									<span class="text-primary">Disponibles:90</span>
									<span class="pull-right">Descuento:3%</span>
								</h4>
							</a>
							<div class="progress">
							  <div class="progress-bar progress-bar-primary"  role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
							    <span class="sr-only">90% Complete</span>
							  </div>
							</div>
						</div>
					</article><!-- Un Producto -->
				</div>

				<br>

				<div class="row">
					<article class="product col-md-12">
						
						<div class="col-md-12">
							<a href="" class="btn btn-default btn-block">
								<h4 class="col-md-12 text-left">CANDADOS YALE 11840 VISUAL BLISTER</h4>
								<h4 class="col-md-12"> 
									<span class="pull-left">Precio:</span>
									<span class="text-danger">Disponibles:2</span>
									<span class="pull-right">Descuento:3%</span>
								</h4>
							</a>
							<div class="progress">
							  <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
							    <span class="sr-only">2% Complete</span>
							  </div>
							</div>
						</div>
					</article><!-- Un Producto -->
				</div>
				
			</div><!-- Lista de Productos -->

			
		</section><!-- Contene	dor de Lista de Productos y Productos Agregados -->
	</div>

	<div class="row">
		<nav class="navbar navbar-fixed-bottom" role="navigation">
			<ul class="nav navbar-nav pull-right">
				<li>
					<button href="#" id="tool" class="btn btn-primary btn-lg" data-container="body" data-toggle="popover" data-placement="top" data-content="" data-original-title="" title="">Productos Seleccionados <span class="glyphicon glyphicon-shopping-cart"></span></button>
				</li>
			</ul>
		</nav><!-- products navbar-->

		<div class="selected-products-list hidden">
			<ul class="btn-group text-center">
				<li class="btn btn-default btn-block">Item 1</li>
				<li class="btn btn-default btn-block">Item 2</li>
				<li class="btn btn-default btn-block">Item 3</li>
			</ul>
		</div><!-- tablet-selected-products-popover -->
	</div><!-- row -->

	<script src="_/js/bootstrap.js"></script>
	<script src="_/js/myscript.js"></script>
</body>
</html>