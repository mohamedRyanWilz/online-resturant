<?php
require("../includes/config.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
render("delete_update_form.php",["title"=>"update","control"=>"/control.php"]);
}


else if($_SERVER["REQUEST_METHOD"] == "POST"){


}
?>
