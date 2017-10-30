<?php
require("../includes/constants.php");
require("../includes/functions.php");
$id=$_GET['id'];
$result=query("DELETE FROM  `reserved` ,
`payment_value` USING  `reserved` INNER JOIN  `payment_value` ON ( reserved.re_id = payment_value.app_id ) WHERE reserved.re_id =?",$id);
if(!$result){
cong("deleted succesfuly");
}
else{
applogize("an error ocure");
}



?>
