<?php
phpinfo();
$serverName = "192.168.1.44";
$connectionInfo = array( "Database"=>"TKSauditorias2a", "UID"=>"sa", "PWD"=>"ServerApli!08");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}










$counter=0;

## seleccionamos la base de datos
	$sql="select top 100 color from dbo.vehiculos";
	## generamos el query
	$result=sqlsrv_query($conn,$sql);
	## recorremos todos los registros

if( $result === false ) {
     die( print_r( sqlsrv_errors(), true));
}


	while($row=sqlsrv_fetch_array($result))
	{
		$counter++; 
		echo ("$counter Nombres: ".$row["color"]); 
		echo "<hr>";
	}

## cerramos la conexion
sqlsrv_close($conn);


?>