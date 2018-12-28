<?php
include "conectar.php";
$consulta =ConsultarCurso($_GET['CODCUR']);
function ConsultarCurso($CODCURS)
{
	$sentencia="SELECT * FROM curso WHERE CODCUR='".$CODCURS."'";
	$resultado=mysql_query($sentencia);
	$filas=mysql_fetch_assoc($resultado);
	return[
		$filas['CODCUR'],
		$filas['NOMCUR'],
		$filas['CODMOD'],
	];

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Modificando</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				CECIN <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/avatar.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles">Usuario</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.html">
						<i class="zmdi zmdi-attachment-alt zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<<!--<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-assignment zmdi-hc-fw"></i> Registro <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="agregar.html"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Agregar</a>

						</li>
					</ul>
				</li>-->
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Matricula <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="agregar.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Agregar</a>
							
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> Pagos<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="pagorecibo.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Recibo</a>
						</li>	
						<li>
							<a href="pagoboleta.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Boleta</a>
						</li>
						<li>
							<a href="pagofactura.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Factura</a>
						</li>					
					</ul>
				</li>
				<li>
					<a href="curso.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Cursos

					</a>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> Horario <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="programacion.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Programación</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				</ul>
		</nav>

		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Cursos <small>CECIN</small></h1>
			</div>
			<!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
		</div>-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
						<li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
						<li><a href="#list" data-toggle="tab">Cursos Registrados</a></li>					  						  	
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="" method="POST">
									    	<div class="form-group label-floating">
											  <label class="control-label">#</label>
											  <input class="form-control" type="text" name="numerocur">
											</div>
									    	<div class="form-group label-floating">
											  <label class="control-label">Codigo de Curso</label>
											  <input class="form-control" type="text" name="codigocur">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input class="form-control" type="text" name="nombrecur">
											</div>								
											<div class="form-group">
										        <label class="control-label">Modulo</label>
										        <select class="form-control">
										          <option>Masculino</option>
										          <option>Femenino</option>
										        </select>
										    </div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm" name="guardar"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
									    </form>
									    <?php
									    	if(isset($_POST['guardar']))
									    	{
									    		include("conexion.php");
									    		
									    		$codigocur = $_POST['codigocur'];
									    		$nombrecur = $_POST['nombrecur'];
									    		$modulocur = $_POST['modulocur'];
												$insertar = "INSERT INTO CURSO(CODCUR, NOMCUR, CODMOD) VALUES('$codigocur', '$mombrecur', $modulocur)";
												$ejecutar = sqlsrv_query($conn, $insertar);
											if($ejecutar){
												echo"<h3>INGRESÓ CORRECTAMENTE</h3>";
    											}
  											}
										?>

									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Código de Curso</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Módulo</th>
											
									</thead>
									<tbody>
																				
										<?php
										  include "conexion.php";
										  $sentencia ="SELECT * FROM curso";
										  $resultado=mysql_query($sentencia);
										  while($filas=mysql_fetch_assoc($resultado)){
										  echo "<tr>";
										  echo "<td>"; echo $filas['CODCUR'];echo "</td>";
										  echo "<td>"; echo $filas['NOMCUR'];echo "</td>";
										  echo  "<td><a href='' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>";
										  echo "<td><a href='#!' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td>";
										  echo "</tr>";
										}
										 ?>
								
										<tr>
											
										</tr>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>