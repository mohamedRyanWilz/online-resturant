<?php

require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
render("search_form.php",["title"=>"Search","control"=>"/control.php"]);
}


else if($_SERVER["REQUEST_METHOD"] == "POST"){


}
?>

 
