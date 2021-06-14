<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = postgres";
   $credentials = "user = postgres password=1234";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   
   if( isset($_GET['delCartIngId']) )
	{
		$itemid = $_GET['delCartIngId'];
		$sql = pg_query($db, "select  deletefromcart('$itemid');");
		
		
		echo "<meta http-equiv='refresh' content='0;url=cart.php'>";
	}
	?>