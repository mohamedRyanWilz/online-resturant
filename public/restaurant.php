<?php
require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
render("restaurant_form.php",["title"=>"INformation"]);
}
else if($_SERVER["REQUEST_METHOD"] == "POST"){
$id=$_POST['selected'];
$vote=$_POST['vote'];
$result=query("UPDATE `foods` SET vote=vote+$vote,number=number+1 where id=? ",$id);
 if(!$result){
echo "thanks for your help";
header( "refresh:3;url=/restaurant.php" );

}
else{
apologize("sorry an erro ocure");
}
}

?>
