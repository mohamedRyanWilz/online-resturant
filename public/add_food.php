<?php

require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
render("add_food_form.php",["title"=>"ADD FOOD","control"=>"/control.php"]);
}


else if($_SERVER["REQUEST_METHOD"] == "POST"){
 $name= htmlspecialchars($_POST['name']);
 $discr= htmlspecialchars($_POST['disc']);
 $price= htmlspecialchars($_POST['price']);
  $result=query("INSERT INTO `foods` (name,description,price,vote,number) VALUES(?,?,?,0,0)",$name,$discr,$price);
 if(!$result){
echo "done";
header( "refresh:3;url=/control.php" );

}
else{
apologize("sorry an erro ocure");
}
 }
 ?>
