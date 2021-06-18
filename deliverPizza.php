<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = postgres";
   $credentials = "user = postgres password=1234";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   
   if( isset($_GET['editorderId']) )
	{
		$order = $_GET['editorderId'];
		
		
		$sql = pg_query($db, "select  updateorderstatus('$order');");
		
		$sql1 = pg_query($db, "select  delivered('$order');");
		
		
		
		echo "<meta http-equiv='refresh' content='0;url=bakerProfile.php'>";
	}
	?>