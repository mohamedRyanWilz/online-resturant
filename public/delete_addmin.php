<?php
require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){

if($_SESSION['id']==1){
render("delete_addmin_form.php",["title"=>"Delete Addmin","control"=>"/control.php"]);
}
else{
 apologize("you can not do that");
}
}


else if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST["name"];
$result=query("DELETE from `users` where username=?",$name);
if(!$result){
echo"<script>alert('user have been Deleted')</script>";
redirect("/control.php");
}
else{
apologize("an error ocure");
}

}
?>
