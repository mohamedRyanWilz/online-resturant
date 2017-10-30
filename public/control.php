<?php

require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
render("control_form.php",["title"=>"control","control"=>"/control.php"]);
}


else if($_SERVER["REQUEST_METHOD"] == "POST"){
 $roul=$_POST["selected"];
 switch($roul){
 
 case 1:
 redirect("/add_table.php");
 break;
  case 2:
   redirect("/delete_table.php");
 break;
  case 3:
  redirect("/add_food.php");
 break;
  case 4:
     redirect("/delete_food.php");
 break;
  case 5:
       redirect("/update_food.php");
 break;
  case 6:
  redirect("/register.php");
 break;
  case 7:
   redirect("/delete_addmin.php");
 break;
 case 8:
 redirect("/search_app.php");
 break;
 case 9:
 redirect("/delete_app.php");
 break;
 case 10:
 redirect("/update_app.php");
 break;
 default:
 break;
 }
 }
?>

