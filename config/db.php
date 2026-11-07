<?php
 $host="127.0.0.1";
   $dbname="sntp";
    $user="root";
    $pass="hiba2006";

    try{
        $pdo=new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
           $user,
           $pass
           );
   
    echo "mysql connection is working";
    }
    catch(PDOException $e){
        echo"Connection failed";
    
    }
        ?>
        


   