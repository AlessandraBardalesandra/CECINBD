<?php
$conectar = mysqli_connect('cecinweb-mysqldbserver.mysql.database.azure.com','mysqldbuser@cecinweb-mysqldbserver','Sistema$1','mysqldatabase14656');

if(mysqli_connect_errno($conectar)){
	echo "Conexion fallida". mysqli_connect_error();
}
//else{
//}
?>



