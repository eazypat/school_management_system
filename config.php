<?php
$dbo = new DbFunctions("localhost","root","schoolms_db",""); //Create a database operation and file manipulation object, (the creation also perform a database connection based on the connection parameter supplied)
$con = DbFunctions::$con; //get the connection opbject created
$phpf = new RphpFunctions; //create object to perform redifined php task

?>