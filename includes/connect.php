<?php   

 $con = mysqli_connect('localhost','root','','Mystore');
 if($con){
    echo "connection succesfull";
 }else{
    die(mysqli_error($con));
 }
 


?>