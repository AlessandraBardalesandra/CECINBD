<!DOCTYPE html>
<html lang="es">
<head>
	<title>Cursos</title>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Cursos <small>CECIN</small></h1>
			</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
						<li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
						<li><a href="#curreg" data-toggle="tab">Cursos Registrados</a></li>
						<li><a href="#modreg" data-toggle="tab">Modulos Registrados</a></li>					  						  	
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="" method="POST">									    	
											<div class="form-group label-floating">
											  <label class="control-label">Codigo de Curso</label>
											  <input class="form-control" type="text" name="codigocur">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input class="form-control" type="text" name="nombrecur">
											</div>
											<div class="form-group label-floating">
										        <label action= "<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="control-label">Modulo</label>
										     <input class="form-control" type="text" name="modulocur">
										        <!--<select class="form-control">
										         <option name="1">Ofimática Básica</option>
										          <option name="2">Ofimática Avanzada</option>
										          <option name="3">Diseño Grafico</option>
										          <option name="4">Diseñador Cad</option>
										          <option name="5">Paginas Web</option>
										          <option name="6">Doctor PC</option>
										          <option name="7">Cursos Libres</option>
										        </select>-->
										    </div>										
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm" name="guardar"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
										</form>
									    <?php
									    	include 'conectar.php';
									    	if(isset($_POST['guardar'])){									    		
									    		$codigocur = $_POST['codigocur'];
									    		$nombrecur = $_POST['nombrecur'];
									    		$modulocur = $_POST['modulocur'];
												$insertar = "INSERT INTO curso(CODCUR, NOMCUR, CODMOD) VALUES('$codigocur', '$nombrecur', $modulocur)";

												$verificar_usuario = mysqli_query($conectar, "SELECT * FROM curso WHERE CODCUR = '$codigocur'");
												if(mysqli_num_rows($verificar_usuario) > 0){
													echo '<script>
													alert("El curso ya está registrado");
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

					  	<div class="tab-pane fade" id="curreg">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">Código</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Modulo</th>
											<th class="text-center">Modificar</th>
											<th class="text-center">Eliminar</th>
										</tr>									
									</thead>
									<tbody>
																				
										<?php
										  include "conectar.php";
										  $sentencia =("SELECT * FROM curso");
										  $resultado=mysqli_query($conectar, $sentencia);
										  while($filas=mysqli_fetch_array($resultado)){
										  echo "<tr>";
										  echo "<td>"; echo $filas['CODCUR'];echo "</td>";
										  echo "<td>"; echo $filas['NOMCUR'];echo "</td>";
										  echo "<td>"; echo $filas['CODMOD'];echo "</td>";
										  echo  "<td><a href='modcur.php?CODCUR=".$filas['CODCUR']."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>";
										  echo "<td><a href='#!' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td>";
										  echo "</tr>";
										}
										 ?>
									</tbody>
								</table>
							</div>
						</div>

							
						<div class="tab-pane fade" id="modreg">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>										
											<th class="text-center">Código</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Modificar</th>
											<th class="text-center">Eliminar</th>
										</tr>									
									</thead>
									<tbody>																			
										<?php
										  include "conectar.php";
										  $sentencia =("SELECT * FROM modulo");
										  $resultado=mysqli_query($conectar, $sentencia);
										  while($filas=mysqli_fetch_array($resultado)){
										  echo "<tr>";
										  echo "<td>"; echo $filas['CODMOD'];echo "</td>";
										  echo "<td>"; echo $filas['NOMMOD'];echo "</td>";
										  echo  "<td><a href='modcur.php?CODMOD=".$filas['CODMOD']."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>";
										  echo "<td><a href='#!' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td>";
										  echo "</tr>";
										}
										 ?>								
									</tbody>
								</table>
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