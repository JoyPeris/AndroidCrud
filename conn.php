<?php
$dns="localhost";
$dbname="flutter";
$user="root";
$pass = "";
$connect=new mysqli($dns,$user,$pass,$dbname);
if ($connect){
   

}else{
    echo " connection failed";
    exit();
}

?>