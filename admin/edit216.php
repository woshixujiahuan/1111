<?php
header("content-type:text/html;charset=utf-8");
require_once 'nextedit.php';
if(empty($_GET['id'])){  
    die('id is empty');  
} 
	 $edit=intval($_GET['id']);
     $name=$_POST['name'];
	 $seat=$_POST['seat'];
    $sql="update people2 set name='$name',seat='$seat' where id=$edit";
	mysqli_query($conn,$sql);
   if(mysqli_error()){  
    echo mysqli_error();  
    }else{  
    header("Location:216people.php");  
   }  
 ?>