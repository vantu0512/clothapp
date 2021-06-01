<?php
$conn_string = "host=ec2-107-21-10-179.compute-1.amazonaws.com"
        . " port=5432 "
        . " dbname=dca4nl249vqnhv"
        . " user=wcgxbroqcssxxa"
        . " password=e0c98a99046235cf276d2e104f8f4305dcfce626c2dc4aeb7d83b969234dd912";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully Tu \n";
   }
?>