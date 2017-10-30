<?php
require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
$result=query("select * from `foods`");
render("menue_form.php",["title"=>"FOODS Menue","result"=>$result]);
}
else{

}
?>
