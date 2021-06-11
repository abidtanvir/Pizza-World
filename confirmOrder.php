<?php
$host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = postgres";
   $credentials = "user = postgres password=1234";

   $db = pg_connect( "$host $port $dbname $credentials"  );




if (isset($_REQUEST["submit"]))
	{
		
		
		$sql = pg_query ($db, "select  confirmorder();");
		$sql2 = pg_query ($db, "select  deletecart();");
		
 
		 echo "<meta http-equiv='refresh' content='0;url=custompizza.php'>";
		 
	}


?>