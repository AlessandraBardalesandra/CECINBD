<!DOCTYPE html>
<html lang="es">
<head>
	<title>Agregar</title>
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
					<a href="home.php">
						<i class="zmdi zmdi-attachment-alt zmdi-hc-fw"></i> Inicio
					</a>
				</li>				
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
			  <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Estudiantes <small>CECIN</small></h1>
			  
			<!--</div>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
		</div>-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#nuevo" data-toggle="tab">Nuevo</a></li>
					  	<li><a href="#listaralu" data-toggle="tab">Listar</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="nuevo">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="">
									    	<fieldset>Datos del Estudiante</fieldset>
									      	<div class="form-group label-floating">
											  <label class="control-label">DNI</label>
											  <input class="form-control" type="text" name="dnialu">
											</div>
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombres</label>
											  <input class="form-control" type="text" name="nombresalu">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Apellidos</label>
											  <input class="form-control" type="text" name="apellidosalu">
											</div>								
											<div class="form-group label-floating">
											  <label class="control-label">Dirección</label>
											  <input class="form-control" type="text" name="direccionalu">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Email</label>
											  <input class="form-control" type="text" name="emailalu">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Telefono</label>
											  <input class="form-control" type="text" name="telefonoalu">
											</div>
											<div class="form-group">
											  <label class="control-label">Fecha de Nacimeinto</label>
											  <input class="form-control" type="date" name="nacimientoalu">
											</div>
											<div class="form-group">
										        <label class="control-label">Sexo</label>
										         <input class="form-control" type="text" name="sexoalu">
										       <!-- <select class="form-control" name="sexoalu">
										          <option>Masculino</option>
										          <option>Femenino</option>
										        </select>-->
										    </div>
											<p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm" name="guardar1"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
									    </form>
									     <?php
									    	include 'conectar.php';
									    	if(isset($_POST['guardar1'])){									    		
									    		$dnialu = $_POST['dnialu'];
									    		$nombresalu = $_POST['nombresalu'];
									    		$apellidosalu = $_POST['apellidosalu'];
									    		$direccionalu =$_POST['direccionalu'];
									    		$emailalu =$_POST['emailalu'];
									    		$telefonoalu =$_POST['telefonoalu'];
									    		$nacimientoalu =$_POST['nacimientoalu'];
									    		$sexoalu =$_POST['sexoalu'];
												$insertar = "INSERT INTO estudiante(DNIALU, NOMALU, APEALU, DIRALU, EMAALU, TELALU, FNAALU, SEXALU) VALUES('$dnialu', '$nombresalu', '$apellidosalu', '$direccionalu', '$emailalu', '$telefonoalu', '$nacimientoalu', '$sexoalu')";

												$verificar_usuario = mysqli_query($conectar, "SELECT * FROM estudiante WHERE DNIALU = '$dnialu'");
												if(mysqli_num_rows($verificar_usuario) > 0){
													echo '<script>
													alert("El estudiante ya está registrado");
													windows.history.go(-1);
													</script>';
											}

												$ejecutar = mysqli_query($conectar, $insertar);
											if($ejecutar){
												echo '<script>
													alert("Ingresó datos correctamente");
												</script>';}  
												}
										?>
									</div>
								</div>
							</div>
						</div>

					  	<div class="tab-pane fade" id="listaralu">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">DNI</th>
											<th class="text-center">Nombres</th>
											<th class="text-center">Apellidos</th>
											<th class="text-center">Dirección</th>
											<th class="text-center">Email</th>
											<th class="text-center">Telefono</th>
											<th class="text-center">Fecha de Nacimiento</th>
											<th class="text-center">Sexo</th>
											<th class="text-center">Actualizar</th>
											<th class="text-center">Borrar</th>
										</tr>
									</thead>
										<tbody>
																				
										<?php
										  include "conectar.php";
										  $sentencia =("SELECT * FROM estudiante");
										  $resultado=mysqli_query($conectar, $sentencia);
										  while($filas=mysqli_fetch_array($resultado)){
										  echo "<tr>";
										  echo "<td>"; echo $filas['DNIALU'];echo "</td>";
										  echo "<td>"; echo $filas['NOMALU'];echo "</td>";
										  echo "<td>"; echo $filas['APEALU'];echo "</td>";
										  echo "<td>"; echo $filas['DIRALU'];echo "</td>";
										  echo "<td>"; echo $filas['EMAALU'];echo "</td>";
										  echo "<td>"; echo $filas['TELALU'];echo "</td>";
										  echo "<td>"; echo $filas['FNAALU'];echo "</td>";
										  echo "<td>"; echo $filas['SEXALU'];echo "</td>";

										  echo  "<td><a href='agregar.php? DNIALU=".$filas['DNIALU']."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>";
										  echo "<td><a href='#!' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td>";
										  echo "</tr>";
										}
										 ?>
									</tbody>
								
									<!--<tbody>
										
										<tr>
											<td>4</td>
											<td>Alba</td>
											<td>Bonilla</td>
											<td>El Salvador</td>
											<td>alba@gmail.com</td>
											<td>+50312345678</td>
											<td>01/10/1993</td>
											<td>Female</td>
										
											<td>Section</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
									</tbody>
								</table>-->
								<!--<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>-->
							</table>
						</div>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
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