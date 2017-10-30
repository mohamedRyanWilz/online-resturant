<?php

require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
render("update_food_form.php",["title"=>"UPDATE FOOD","control"=>"/control.php"]);
}


else if($_SERVER["REQUEST_METHOD"] == "POST"){
 $id=$_POST['selected'];
 $price= htmlspecialchars($_POST['price']);
 $result=query("UPDATE `foods` SET price=? where id=?",$price,$id);
  if(!$result){
echo "done";
header( "refresh:3;url=/control.php" );

}
else{
apologize("sorry an erro ocure");
}
}
?>
