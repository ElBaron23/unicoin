<?php
$dbuser="root";
$dbpassword="";
$database=new PDO("mysql:host=localhost;dbname=unicoin;",$dbuser,$dbpassword);
if($database){
    
}else{
    echo "not connect";
}

?>