<?php





if (isset($_REQUEST["submit"]))
	{
		
		
		$sql = pg_query ($db, "select  confirmorder();");
		$sql2 = pg_query ($db, "select  deletecart();");
		
 
		 echo "<meta http-equiv='refresh' content='0;url=custompizza.php'>";
		 
	}


?>