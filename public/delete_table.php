<?php

require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
render("delete_table_form.php",["title"=>"Delete_table","control"=>"/control.php"]);
}


else if($_SERVER["REQUEST_METHOD"] == "POST"){
$persons=htmlspecialchars($_POST["persons"]);
$amount=htmlspecialchars($_POST["amount"]);
$value=query("select * from `tables` where persons=?",$persons);
$am=$value[0]['amount'] - $amount;
if($am >0){
$result=query("UPDATE `tables` SET amount=? where persons=?",$am,$persons);
}
else{
$result=query("DELETE FROM `tables` where persons=?",$persons);
}
if(!$result){
echo "done";
header( "refresh:3;url=/control.php" );

}
else{
apologize("sorry an erro ocure");
}

}
?>
