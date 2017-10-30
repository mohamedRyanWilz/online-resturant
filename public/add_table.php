<?php
require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
render("add_table_form.php",["title"=>"ADD TABLE","control"=>"/control.php"]);
}


else if($_SERVER["REQUEST_METHOD"] == "POST"){
$persons=htmlspecialchars($_POST["persons"]);
$amount=htmlspecialchars($_POST["amount"]);
$result=query("INSERT INTO `tables` (persons,amount) VALUES (?,?) ON DUPLICATE KEY UPDATE amount = amount + VALUES(amount)",$persons,$amount);
if(!$result){
echo "done";
header( "refresh:3;url=/control.php" );

}
else{
apologize("sorry an erro ocure");
}
}
?>
