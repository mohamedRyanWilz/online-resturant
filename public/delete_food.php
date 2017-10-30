<?php

require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
render("delete_food_form.php",["title"=>"DELETE FOOD","control"=>"/control.php"]);
}


else if($_SERVER["REQUEST_METHOD"] == "POST"){
 $id=$_POST['selected'];
 $result=query("DELETE FROM `foods` where id=?",$id);
if(!$result){
echo "done";
header( "refresh:3;url=/control.php" );

}
else{
apologize("sorry an erro ocure");
}
 
 }
 ?>
